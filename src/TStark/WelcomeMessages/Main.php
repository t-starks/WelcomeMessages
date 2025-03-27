<?php

namespace TStark\WelcomeMessages;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\player\Player;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener {

    private $config;

    public function onEnable(): void {
        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        $welcomeMessage = str_replace("{player}", $player->getName(), $this->config->get("welcome_message"));
        $player->sendMessage($welcomeMessage);
    }

    public function onRespawn(PlayerRespawnEvent $event): void {
        $player = $event->getPlayer();
        $worldName = $player->getWorld()->getFolderName();
        $worldMessage = $this->config->getNested("world_messages.$worldName", "§eEstás en §b$worldName");
        $player->sendActionBarMessage($worldMessage);
    }

    public function onDeath(PlayerDeathEvent $event): void {
        $player = $event->getPlayer();
        $cause = $player->getLastDamageCause();

        if ($cause instanceof EntityDamageEvent) {
            switch ($cause->getCause()) {
                case EntityDamageEvent::CAUSE_FALL:
                    $deathMessage = $this->config->getNested("death_messages.fall");
                    break;
                case EntityDamageEvent::CAUSE_DROWNING:
                    $deathMessage = $this->config->getNested("death_messages.drowning");
                    break;
                case EntityDamageEvent::CAUSE_STARVATION:
                    $deathMessage = $this->config->getNested("death_messages.hunger");
                    break;
                default:
                    $deathMessage = $this->config->getNested("death_messages.default");
                    break;
            }
        } else {
            $deathMessage = $this->config->getNested("death_messages.default");
        }

        $deathMessage = str_replace("{player}", $player->getName(), $deathMessage);
        $this->getServer()->broadcastMessage($deathMessage);
    }

    public function onKill(PlayerDeathEvent $event): void {
        $player = $event->getPlayer();
        $cause = $player->getLastDamageCause();

        if ($cause instanceof EntityDamageByEntityEvent) {
            $killer = $cause->getDamager();
            if ($killer instanceof Player) {
                $weapon = $killer->getInventory()->getItemInHand()->getName();
                $killMessage = str_replace(
                    ["{player}", "{killer}", "{weapon}"],
                    [$player->getName(), $killer->getName(), $weapon],
                    $this->config->getNested("kill_messages.default")
                );
                $this->getServer()->broadcastMessage($killMessage);
            }
        }
    }
}

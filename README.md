<h1>WelcomeMessages<img src="icon.png" height="64" width="64" align="left"></img></h1><br/>

<table border="1">
  <tr>
    <th>Description</th>
    <th>Link</th>
  </tr>
  <tr>
    <td>API</td>
    <td><a href="https://poggit.pmmp.io/p/WelcomeMessages"><img src="https://poggit.pmmp.io/shield.api/WelcomeMessages" alt="Version"></a></td>
  </tr>
  <tr>
    <td>Version</td>
    <td><a href="https://poggit.pmmp.io/p/WelcomeMessages"><img src="https://poggit.pmmp.io/shield.state/WelcomeMessages" alt="API"></a></td>
  </tr>
  <tr>
    <td>Downloads</td>
    <td><a href="https://poggit.pmmp.io/p/WelcomeMessages"><img src="https://poggit.pmmp.io/shield.dl.total/WelcomeMessages" alt="Downloads"></a></td>
  </tr>
</table>

Welcome to **WelcomeMessages**, a PocketMine-MP plugin that enhances the player experience by displaying customizable messages when they join the server, change worlds, die, or are killed.

## **Features**
- **Welcome Message**: Displays a customizable message when a player joins the server.
- **ActionBar Messages**: Shows a message in the ActionBar when a player teleports to a specific world.
- **Death Messages**: Notifies the cause of a player's death (falling, drowning, starvation, etc.).
- **Kill Messages**: Displays a message when a player is killed by another, including the weapon used.
- **Customizable Configuration**: All messages can be modified in the `config.yml` file.


## **Installation**
1. Download the `.phar` file from [Poggit](https://poggit.pmmp.io) or compile the plugin yourself.
2. Place the `.phar` file in your PocketMine-MP server's `plugins` folder.
3. Restart the server.
4. Done! The plugin will be enabled automatically.

## **Configuration**
The plugin automatically generates a `config.yml` file in the `plugins/WelcomeMessages/` folder. You can customize the messages by editing this file.

### **Example `config.yml`**
```yaml
# Welcome message when a player joins the server
welcome_message: "§aWelcome, {player}, to the server!"

# World messages
world_messages:
  parcels: "§eYou are in §bParcels"
  mines: "§eYou are in §bMines"
  pvp: "§eYou are in §bPvP"
  survival: "§eYou are in §bSurvival"

# Death messages
death_messages:
  fall: "§c{player} died from falling."
  drowning: "§c{player} drowned."
  hunger: "§c{player} died of hunger."
  default: "§c{player} died."

# Kill messages
kill_messages:
  default: "§c{player} was killed by {killer} using {weapon}."
```

### **Available Variables**
- `{player}`: Player's name.
- `{killer}`: Killer's name.
- `{weapon}`: Weapon used for the kill.

## **Commands**
- **/wmreload**: Reloads the plugin configuration without restarting the server.

## **Permissions**
- `welcomemessages.reload`: Allows the use of the `/wmreload` command.

## **Contributions**
Contributions are welcome! If you find a bug or have an idea to improve the plugin, open an **issue** or submit a **pull request** on [GitHub](https://github.com/t-starks/WelcomeMessages).

---

## **Credits**
- **Developer**: [T. Stark](https://github.com/t-starks)
- **Version**: 1.0.0
- **PocketMine-MP API**: 5.0.0

## 💰 Donations
[![BuyMeACoffee](https://img.shields.io/badge/Buy%20Me%20a%20Coffee-ffdd00?style=for-the-badge&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/tstark)  
[![Ko-Fi](https://img.shields.io/badge/Ko--fi-F16061?style=for-the-badge&logo=ko-fi&logoColor=white)](https://ko-fi.com/tstark)

Thank you for using **WelcomeMessages**! If you have any questions or need help, feel free to contact me. 😊

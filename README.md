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

¡Bienvenido a **WelcomeMessages**, un plugin para PocketMine-MP que mejora la experiencia de los jugadores mostrando mensajes personalizables cuando entran al servidor, cambian de mundo, mueren o son asesinados.

---

## **Características**
- **Mensaje de bienvenida**: Muestra un mensaje personalizable cuando un jugador entra al servidor.
- **Mensajes en ActionBar**: Muestra un mensaje en la ActionBar cuando un jugador se teletransporta a un mundo específico.
- **Mensajes de muerte**: Notifica la causa de la muerte de un jugador (caída, ahogamiento, hambre, etc.).
- **Mensajes de asesinato**: Muestra un mensaje cuando un jugador es asesinado por otro, incluyendo el arma utilizada.
- **Configuración personalizable**: Todos los mensajes se pueden modificar en el archivo `config.yml`.

---

## **Instalación**
1. Descarga el archivo `.phar` desde [Poggit](https://poggit.pmmp.io) o compila el plugin tú mismo.
2. Coloca el archivo `.phar` en la carpeta `plugins` de tu servidor PocketMine-MP.
3. Reinicia el servidor.
4. ¡Listo! El plugin se habilitará automáticamente.

---

## **Configuración**
El plugin genera automáticamente un archivo `config.yml` en la carpeta `plugins/WelcomeMessages/`. Puedes personalizar los mensajes editando este archivo.

### **Ejemplo de `config.yml`**
```yaml
# Mensaje de bienvenida cuando un jugador entra al servidor
welcome_message: "§a¡Bienvenido, {player}, al servidor!"

# Mensajes de mundos
world_messages:
  parcelas: "§eEstás en §bParcelas"
  minas: "§eEstás en §bMinas"
  pvp: "§eEstás en §bPvP"
  survival: "§eEstás en §bSurvival"

# Mensajes de muerte
death_messages:
  fall: "§c{player} murió por caída."
  drowning: "§c{player} murió ahogado."
  hunger: "§c{player} murió de hambre."
  default: "§c{player} murió."

# Mensajes de asesinato
kill_messages:
  default: "§c{player} fue asesinado por {killer} usando {weapon}."
```

### **Variables disponibles**
- `{player}`: Nombre del jugador.
- `{killer}`: Nombre del asesino.
- `{weapon}`: Arma utilizada para el asesinato.

---

## **Comandos**
- **/wmreload**: Recarga la configuración del plugin sin reiniciar el servidor.

---

## **Permisos**
- `welcomemessages.reload`: Permite usar el comando `/wmreload`.

---

## **Capturas de Pantalla**
*(Aquí puedes agregar capturas de pantalla del plugin en acción)*

---

## **Contribuciones**
¡Las contribuciones son bienvenidas! Si encuentras un error o tienes una idea para mejorar el plugin, abre un **issue** o envía un **pull request** en [GitHub](https://github.com/t-starks/WelcomeMessages).

---

## **Créditos**
- **Desarrollador**: [T. Stark](https://github.com/t-starks)
- **Versión**: 1.0.0
- **API de PocketMine-MP**: 5.0.0

---

## **Licencia**
Este plugin está bajo la licencia **GPL-3.0**. Consulta el archivo [LICENSE](https://github.com/t-starks/WelcomeMessages/blob/main/LICENSE) para más detalles.

---

## 💰 Donaciones
[![BuyMeACoffee](https://img.shields.io/badge/Buy%20Me%20a%20Coffee-ffdd00?style=for-the-badge&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/tstark)
[![Ko-Fi](https://img.shields.io/badge/Ko--fi-F16061?style=for-the-badge&logo=ko-fi&logoColor=white)](https://ko-fi.com/tstark)

¡Gracias por usar **WelcomeMessages**! Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarme. 😊
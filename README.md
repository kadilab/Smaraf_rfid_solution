# Guide d'installation pour SmarafRFID solution

Ce guide décrit les étapes nécessaires pour installer et configurer l' application ,  SmarafRFID solution est composée de plusieurs parties, le tableau de bord, l'API,le flow Node-RED et le script de réplication.

## Structure du Dossier

Le dossier de votre application est organisé comme suit :

- `dashboard`: Contient le tableau de bord et l'API.
- `script & flow`: Contient le script de réplication et le flow Node-RED.

## Installation

1. **Base de Données RFID**:
   - Créez une base de données nommée "rfid".
   - Importez la table et les données à partir du fichier `dashboard/rfid_data_table.sql`.

2. **Tableau de Bord**:
   - Placez le contenu du dossier `dashboard` sur votre serveur web (par exemple, `htdocs` ou `www`).

3. **Configuration de l'API**:
   - Dans `dashboard/api/config.php`, configurez l'accès à la base de données.

4. **Node-RED**:
   - Installez les nœuds nécessaires : `node-red-node-mysql`, `node-red-node-serialport`, `node-red-contrib-buffer-parser`.
   - Importez le flow depuis le fichier `script & flow`.

5. **Configuration de Node-RED**:
   - Dans le flow, configurez la connexion à la base de données.
   - Dans la fonction "adddata", modifiez l'URL vers le serveur dans la ligne `https://gsad.uzacart.shop/api/`.

6. **Script de Réplication**:
   - Ouvrez le script `script & flow/replication.js`.
   - Configurez l'accès à la base de données.

7. **PM2 et Autostart**:
   - Installez PM2 en suivant les instructions sur [https://pm2.keymetrics.io/].
   - Assurez-vous de configurer Node-RED pour le démarrage automatique.


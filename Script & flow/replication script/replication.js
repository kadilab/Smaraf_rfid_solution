const https = require('https');
const mysql = require('mysql');

// Configuration de la connexion à la base de données
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'gsad'
});

// URL de l'API à interroger
const apiUrl = 'https://gsad.uzacart.shop/?ant=1&epc=';

// Requête SELECT pour récupérer les enregistrements avec l'état "1"
const selectQuery = "SELECT epc FROM rfid_data_table WHERE state = '1'";

// Fonction pour effectuer une requête HTTP vers l'API et retourner une promesse
function makeHttpRequest(epc) {
  const options = {
    method: 'GET',
    headers: {
      'Content-Type': 'application/json'
    }
  };

  return new Promise((resolve, reject) => {
    https.get(apiUrl + epc, options, (res) => {
      let responseData = '';
      res.on('data', (chunk) => {
        responseData += chunk;
      });
      res.on('end', () => {
        // Traitement de la réponse ici (responseData contient la réponse JSON)
        // Mettre à jour l'état à "0" pour l'epc si la requête réussit
        if (res.statusCode === 200) {
          resolve(epc);
        } else {
          reject(new Error(`La requête a échoué pour l'epc : ${epc}`));
        }
      });
    }).on('error', (err) => {
      reject(new Error(`Erreur lors de la requête HTTP : ${err.message}`));
    });
  });
}

// Fonction pour mettre à jour l'état à "0" pour l'epc dans la base de données et retourner une promesse
function updateStateToZero(epc) {
  const updateQuery = `UPDATE rfid_data_table SET state = '0' WHERE epc = '${epc}'`;
  return new Promise((resolve, reject) => {
    connection.query(updateQuery, (err, results) => {
      if (err) {
        reject(new Error(`Erreur lors de la mise à jour de l'état pour l'epc : ${epc}`));
      } else {
        resolve(epc);
      }
    });
  });
}

// Connexion à la base de données
connection.connect((err) => {
  if (err) {
    console.error('Erreur lors de la connexion à la base de données :', err.message);
    return;
  }
});
// Exécution de la fonction toutes les 10 secondes
setInterval(executeQueryEvery10Seconds, 1000);
// Fonction asynchrone pour exécuter la requête toutes les 10 secondes
async function executeQueryEvery10Seconds() {
  console.log("loading...")
  try {
    // Exécution de la requête SELECT pour récupérer les enregistrements avec l'état "1"
    const results = await new Promise((resolve, reject) => {
      connection.query(selectQuery, (err, results) => {
        if (err) {
          reject(new Error(`Erreur lors de la récupération des enregistrements avec l'état "1" : ${err.message}`));
        } else {
          resolve(results);
        }
      });
    });

    // Mettre à jour l'état à "0" pour chaque enregistrement avec l'état "1"
    const epcsToUpdate = results.map((row) => row.epc);
    for (const epc of epcsToUpdate) {
      try {
        console.log(epc);
        await makeHttpRequest(epc);
        await updateStateToZero(epc);
      } catch (error) {
        console.error(error.message);
      }
    }
  } catch (error) {
    console.error(error.message);
  }
}

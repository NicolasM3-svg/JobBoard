// import required essentials
const express = require('express');
// create new router
const router = express.Router();
// create a JSON data array
const pool = require('../data/config');

// HTTP methods ↓↓ starts here.

// READ
// this api end-point of an API returns JSON data array

var reponse = {};
var arraytest = [];
    reponse["error"] = "Aucun résultat";
    reponse["tableKeys"] = {"id": "l'id de l'annonce'","entreprise": "l'id de l'entreprise","type": "Type de contrat","poste": "Nom du poste","description": "contenu de la description","tags": "Tags pour la recherche","p_date": "date d'ajout de l'annonce (format yyyy-mm-dd)"}
arraytest[0] = reponse["tableKeys"]


router.get('/', (request, response) => {
  pool.query('SELECT * FROM annonces', (error, result) => {
    if (error) throw error;
    if (!result.length) {
      response.send(arraytest)
    } else {
      response.send(result);
    };
  });
});

router.get('/:id', (request, response) => {
  const id = request.params.id;
  pool.query('SELECT * FROM annonces WHERE id = ?', id, (error, result) => {
    if (error) throw error;
    if (!result.length) {
      response.send("Aucun résultat")
    } else {
      response.send(result);
    };
  });
});

router.put('/:id', (request, response) => {
  const id = request.params.id;
  pool.query('UPDATE annonces SET ? WHERE id =' + id, request.body, (error, result) => {
    if (error) throw error;
    if (!result.length) {
      response.send("Aucun résultat")
    } else {
      response.send(result);
    };
  });
});

router.delete('/:id', (request, response) => {
  const id = request.params.id;
  pool.query('DELETE FROM annonces WHERE id =' + id, (error, result) => {
    if (error) throw error;
    response.send(result);
  });
});


router.post('/', (request, response) => {
  console.log(request.body);
  pool.query('INSERT INTO annonces SET ?', request.body, (error, result) => {
    if (error) throw error;

    response.status(201).send(`Annonce ajoutée avec l'ID: ${result.insertId}`);
  });
});


// application, whatever we assign to module.exports will be exposed as a module.
module.exports = router;
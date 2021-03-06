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
    reponse["tableKeys"] = {"id": "l'id de la candidature","utilisateur": "l'id utilisateur","annonce": "id de l'annonce","email": "contenu du mail"}
arraytest[0] = reponse["tableKeys"]


router.get('/', (request, response) => {
  pool.query('SELECT * FROM candidatures', (error, result) => {
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
  pool.query('SELECT * FROM candidatures WHERE id = ?',id, (error, result) => {
    if (error) throw error;
    if (!result.length) {
      response.send(reponse["tableKeys"])
    } else {
      response.send(result);
    };
  });
});

router.put('/:id', (request, response) => {
  const id = request.params.id;
  pool.query('UPDATE candidatures SET ? WHERE id =' + id, request.body, (error, result) => {
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
  pool.query('DELETE FROM candidatures WHERE id =' + id, (error, result) => {
    if (error) throw error;
      response.send(result);
  });
});


router.post('/', (request, response) => {
  console.log(request.body);
    pool.query('INSERT INTO candidatures SET ?', request.body, (error, result) => {
        if (error) throw error;

        response.status(201).send(`Candidature ajoutée avec l'ID: ${result.insertId}`);
    });
});


// application, whatever we assign to module.exports will be exposed as a module.
      module.exports = router;

// import required essentials
const express = require('express');
// create new router
const router = express.Router();
// create a JSON data array
const pool = require('../data/config');

// HTTP methods ↓↓ starts here.

// READ
// this api end-point of an API returns JSON data array
router.get('/', (request, response) => {
  pool.query('SELECT * FROM entreprises', (error, result) => {
    if (error) throw error;
    if (result.length > 0) {
      response.send(result);
    };
  });
});

router.get('/:id', (request, response) => {
  const id = request.params.id;
  pool.query('SELECT * FROM entreprises WHERE id = ?',id, (error, result) => {
    if (error) throw error;
    if (result.length > 0) {
      response.send(result);
    };
  });
});

router.put('/:id', (request, response) => {
  const id = request.params.id;
  pool.query('UPDATE entreprises SET ? WHERE id =' + id, request.body, (error, result) => {
    if (error) throw error;
    if (result.length > 0) {
      response.send(result);
    };
  });
});

router.delete('/:id', (request, response) => {
  const id = request.params.id;
  pool.query('DELETE FROM entreprises WHERE id =' + id, (error, result) => {
    if (error) throw error;
      response.send(result);
  });
});


router.post('/', (request, response) => {
  console.log(request.body);
    pool.query('INSERT INTO entreprises SET ?', request.body, (error, result) => {
        if (error) throw error;

        response.status(201).send(`Entreprise ajoutée avec l'ID: ${result.insertId}`);
    });
});


// application, whatever we assign to module.exports will be exposed as a module.
      module.exports = router;

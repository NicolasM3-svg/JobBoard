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
  pool.query('SELECT * FROM utilisateurs', (error, result) => {
    if (error) throw error;
    if (result.length > 0) {
      response.send(result);
    };
  });
});

router.get('/:id', (request, response) => {
  const id = request.params.id;
  pool.query('SELECT nom FROM utilisateurs WHERE id = ?',id, (error, result) => {
    if (error) throw error;
    if (result.length > 0) {
      response.send(result);
    };
  });
});

router.post('/', (request, response) => {
  console.log(request.body);
    pool.query('INSERT INTO utilisateurs SET ?', request.body, (error, result) => {
        if (error) throw error;

        response.status(201).send(`User added with ID: ${result.insertId}`);
    });
});


// application, whatever we assign to module.exports will be exposed as a module.
      module.exports = router;

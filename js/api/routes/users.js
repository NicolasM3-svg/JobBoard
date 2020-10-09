// import required essentials
const express = require('express');
const bcrypt = require('bcrypt');
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
  pool.query('SELECT * FROM utilisateurs WHERE id = ?',id, (error, result) => {
    if (error) throw error;
    if (result.length > 0) {
      response.send(result);
    };
  });
});

router.put('/:id', (request, response) => {
  const id = request.params.id;
  pool.query('UPDATE utilisateurs SET ? WHERE id =' + id, request.body, (error, result) => {
    if (error) throw error;
      console.log(request.body.email);
      response.send(result);
  });
});


router.post('/', (request, response) => {
  var user_infos = request.body;
  const saltRounds = 10;
  bcrypt.genSalt(saltRounds, function(err, salt) {
    bcrypt.hash(request.body.mdp, salt, function(err, hash) {
        user_infos.mdp = hash;
        console.log(user_infos);
        pool.query('INSERT INTO utilisateurs SET ?', user_infos, (error, result) => {
            if (error) throw error;

            response.status(201).send(`User added with ID: ${result.insertId}`);
        });
    });
});

});


// application, whatever we assign to module.exports will be exposed as a module.
      module.exports = router;

// import required essentials
const express = require('express');
// create new router
const router = express.Router();
// create a JSON data array
const pool = require('../data/config');

// HTTP methods ↓↓ starts here.

// READ
// this api end-point of an API returns JSON data array
router.post('/connect', (request, response) => {
  pool.query('SELECT id, mdp, type, email FROM utilisateurs WHERE email = ?' , request.body.email, (error, result) => {
    if (error) throw error;
    if (result[0].mdp == request.body.mdp ) {
   response.send(result[0]);
 }else {response.send('Les identifiants ne correspondent pas');}
  });
});



// application, whatever we assign to module.exports will be exposed as a module.
      module.exports = router;

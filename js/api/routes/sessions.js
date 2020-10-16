// import required essentials
const express = require('express');
const bcrypt = require('bcrypt');
var session = require('express-session');
var FileStore = require('session-file-store')(session);
var path = require("path");
// create new router
const router = express.Router();
// create a JSON data array
const pool = require('../data/config');

let test = {};

// HTTP methods ↓↓ starts here.

// READ
// this api end-point of an API returns JSON data array
router.post('/connect', (request, response) => {
  pool.query('SELECT id, mdp, type, email FROM utilisateurs WHERE email = ?', request.body.email, (error, result) => {
    if (error) throw error;
    if (result.length > 0) {
      var sess_val = result[0]
      bcrypt.compare(request.body.mdp, result[0].mdp, function(err, result) {
        if (err) {
          console.log("an error occured");
        }
        if (result) {
          request.session.user = sess_val.id;
          request.session.type = sess_val.type;
          response.send(sess_val);
        } else {
          response.send('{"erreur": "Les identifiants ne correspondent pas"}');
        }
      })
    } else {
      response.send('{"erreur": "Cette adresse mail ne correspond à aucun utilisateur"}');
    }
  });
});

router.get('/', (request, response) => {
  response.send('Ce test Fonctionne');
});

router.get('/admin', (req, res) => {

  if (req.session.type == 0) {
    delete(test["userType"]);
    delete(test["error"]);
    test["reponse"] = "1";
    res.sendFile(path.join(__dirname + '/pages/admin.html'));
  } else {
    res.redirect('/JobBoard/index.php');
  }
})



// application, whatever we assign to module.exports will be exposed as a module.
module.exports = router;
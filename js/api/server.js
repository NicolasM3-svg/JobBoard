// import required essentials
const http = require('http');
const express = require('express');
const cors = require('cors');
// import `users` from `routes` folder
const usersRouter = require('./routes/users');
const entreprisesRouter = require('./routes/entreprises');
const annoncesRouter = require('./routes/annonces');
const candidaturesRouter = require('./routes/candidatures');



// create new app
const app = express();
app.use(
  express.urlencoded({
    extended: true
  })
)
app.use(express.json());
// use it before all route definitions
// allowing below URL to access these APIs end-points
// you can replace this URL(http://localhost:8100) with your
// application URL from where you are calling these APIs
app.use(cors({origin: 'http://localhost:80'}));


/* this '/users' URL will have two end-points:
→ localhost:3000/users/ (this returns array of objects)
→ localhost:3000/users/:id (this returns single object)
*/
app.use('/users', usersRouter);
app.use('/entreprises', entreprisesRouter);
app.use('/annonces', annoncesRouter);
app.use('/candidatures', candidaturesRouter);


// default URL to API
app.use('/test', function(req, res) {
    res.send('Ce test Fonctionne');
});

const server = http.createServer(app);
const port = 8000;
server.listen(port);
console.debug('Server listening on port ' + port);

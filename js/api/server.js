// import required essentials
const http = require('http');
const express = require('express');
var session = require('express-session');
var FileStore = require('session-file-store')(session);
const cors = require('cors');
// import `users` from `routes` folder
const usersRouter = require('./routes/users');
const entreprisesRouter = require('./routes/entreprises');
const annoncesRouter = require('./routes/annonces');
const candidaturesRouter = require('./routes/candidatures');
const sessionsRouter = require('./routes/sessions');

var test = {};

// create new app
const app = express();
app.use(
  express.urlencoded({
    extended: true
  })
)

app.use(express.json());

app.use(session({ secret: 'keyboard cat',
    resave: false,
    saveUninitialized: false,
    store: new FileStore,
    cookie: { maxAge: 3600000,secure: false, httpOnly: true }
  })
);


// use it before all route definitions
// allowing below URL to access these APIs end-points
// you can replace this URL(http://localhost:8100) with your
// application URL from where you are calling these APIs
app.use(cors({origin: 'http://localhost:80'}));

app.get('/', (req, res) => {

    if (req.session.user) {
      test["reponse"] = "The user with id: "+req.session.user+" is connected !";
      test["userType"] = req.session.type;
      delete(test["error"]);
      res.send(test);
    }
    else {
        test["error"] = "L'utilisateur actuel est un visiteur"
        delete(test["reponse"]);
        delete(test["userType"]);
        res.send(test)
    }
})

app.get('/destroy', (req, res) => {
    req.session.destroy()
    res.send('Session destroyed')
})

/* this '/users' URL will have two end-points:
→ localhost:3000/users/ (this returns array of objects)
→ localhost:3000/users/:id (this returns single object)
*/
app.use('/users', usersRouter);
app.use('/entreprises', entreprisesRouter);
app.use('/annonces', annoncesRouter);
app.use('/candidatures', candidaturesRouter);
app.use('/sessions', sessionsRouter);


// default URL to API
app.use('/test', function(req, res) {
    res.send('Ce test Fonctionne');
});

const server = http.createServer(app);
const port = 8000;
server.listen(port);
console.debug('Server listening on port ' + port);

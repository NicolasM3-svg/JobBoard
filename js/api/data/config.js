const mysql = require('mysql');

const dbconfig = {
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'Jobboard',
};

const pool = mysql.createPool(dbconfig);
module.exports = pool;

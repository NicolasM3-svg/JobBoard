const mysql = require('mysql');

const dbconfig = {
    host: 'localhost',
    user: 'debian-sys-maint',
    password: 'ecsnxRK3siQU8vDv',
    database: 'Jobboard',
};

const pool = mysql.createPool(dbconfig);
module.exports = pool;
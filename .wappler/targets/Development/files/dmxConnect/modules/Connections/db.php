<?php
// Database Type : "MySQL"
// Database Adapter : "mysql"
$exports = <<<'JSON'
{
    "name": "db",
    "module": "dbconnector",
    "action": "connect",
    "options": {
        "server": "mysql",
        "databaseType": "MySQL",
        "connectionString": "mysql:host=db;sslverify=false;port=3306;dbname=scriptassistbeta;user=db_user;password=tG7vkFuz;charset=utf8"
    }
}
JSON;
?>
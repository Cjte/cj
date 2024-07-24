<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    /**databse config */
    define('DBNAME', 'churchdatabase');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVERS', '');
    # code...
    define('ROOT', "http://localhost/chwb/public");
} else {
    define('ROOT', "http://192.168.0.105/chwb/public/");
    /**databse config */
    define('DBNAME', 'churchdatabase');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPAS', '');
    define('DBDRIVERS', '');
}

define("APP_NAME", 'my website');
define("APP_DESC", 'best web');

/** true show arrors false dont'show error */
define('DEBUG', true);


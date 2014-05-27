<?php

/*
 * Parametros de conexion con la base de datos mysql, postgres y oracle 
 */


define("RAMEN_DIRNAME", "ramen");
define("BASE_PATH", $_SERVER['DOCUMENT_ROOT']."/".RAMEN_DIRNAME);
define('DB_NAMEMYSQL', 'pruebas');
define('DB_USERMYSQL', 'marketplaceuser');
define('DB_PASSWORDMYSQL', 'marketplaceuser');
define('DB_HOSTMYSQL', 'localhost');
define('DB_NAMEPSSQL', 'prueba');
define('DB_USERPSSQL', 'postgres');
define('DB_PASSWORDPSSQL', 'sebastian');
define('DB_HOSTPSSQL', 'localhost');
define('TIME_ZONE', 'America/Bogota');
date_default_timezone_set(TIME_ZONE);


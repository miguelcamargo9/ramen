<?php

/*
 * Parametros de conexion con la base de datos mysql, postgres y oracle 
 */

error_reporting(0);
define("RAMEN_DIRNAME", "ramen");
define("BASE_PATH", $_SERVER['DOCUMENT_ROOT']."/".RAMEN_DIRNAME);
define('DB_NAMEMYSQL', 'ramenadministrativos');
define('DB_USERMYSQL', 'root');
define('DB_PASSWORDMYSQL', 'gymejb');
define('DB_HOSTMYSQL', 'localhost');
define('DB_NAMEPSSQL', 'prueba');
define('DB_USERPSSQL', 'postgres');
define('DB_PASSWORDPSSQL', 'sebastian');
define('DB_HOSTPSSQL', 'localhost');
define('DB_NAMEORACLE', 'XE');
define('DB_USERORACLE', 'oracle');
define('DB_PASSWORDORACLE', 'sebastian');
define('DB_HOSTORACLE', 'localhost');
define('TIME_ZONE', 'America/Bogota');
date_default_timezone_set(TIME_ZONE);


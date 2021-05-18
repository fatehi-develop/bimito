<?php
if( ! defined('DBHOST') )
    define( 'DBHOST', 'localhost' );
if( ! defined('DBUSER') )
    define( 'DBUSER', 'root' );
if( ! defined('DBPASS') )
    define( 'DBPASS', '' );
if( ! defined('DBNAME') )
    define( 'DBNAME', 'academybime' );

if( ! defined('CHARSET') )
    define( 'CHARSET', 'utf8mb4' );
if( ! defined('COLLATE') )
    define( 'COLLATE', 'utf8mb4_general_ci' );
if( ! defined('SITEURL') )
define( 'SITEURL', '/web/public/' );
$dbHost =	DBHOST;
$dbUser =	DBUSER;
$dbPass =	DBPASS;
$dbName =	DBNAME;
$charset =	CHARSET;
$collate =	COLLATE;
$softSetup = false;

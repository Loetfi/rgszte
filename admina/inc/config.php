<?php
ini_set( "display_errors", true );
define( "HOST", "" );
//nama database setting disini
define( "DATABASE_NAME", "rgszte" );
define( "DB_USERNAME", "root" );
//password mysql
define( "DB_PASSWORD", "" );
//dir admin
define( "DIR_ADMIN", "ventus/rgszte/admina/");
//main directory
define( "DIR_MAIN", "ventus/rgszte/");


define('DB_CHARACSET', 'utf8');

require_once ('Database.php');
require_once ('Datatable.php');
require_once ('My_pagination.php');
require_once ('url.php');

$db=new Database();
$pg=New My_pagination();
$dtable = new TableData();

function handleException( $exception ) {
  echo  $exception->getMessage();
}

set_exception_handler( 'handleException' );


?>

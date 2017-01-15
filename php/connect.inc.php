<?php 

$mysql_host = 'mysql11.000webhost.com';
$mysql_user = 'a6208315_mohamad';
$mysql_pass = 'ppppppp';
$connect_error = 'We could not connect to the database, please try later!';

$mysql_db = 'a6208315_main';


if( !@mysql_connect($mysql_host,$mysql_user,$mysql_pass)|| !mysql_select_db($mysql_db) ) {
  
  die( $connect_error );
  

  }

?>
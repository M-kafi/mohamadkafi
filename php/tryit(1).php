<?php


$servername = 'mysql11.000webhost.com';;
$username = 'a6208315_mohamad';
$password = 'ppppppp';
$dbname = 'a6208315_main';

if (  $conn = new mysqli( $servername, $username, $password, $dbname ) ){
  
  $sql = " UPDATE users SET firstname = 'whatever' WHERE id = 8 ";
 
 if( $conn->query($sql) ){
echo 'done' ;
 }else{

 echo $conn->error ;

} 



}

?>
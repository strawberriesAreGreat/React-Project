<?php


function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "test1";
 $dbpass = "test1";
 $db = "woowoodev";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>

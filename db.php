<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ajaximg';


$db = new mysqli($host, $username, $password, $dbname);
if($db->connect_error){
   die("Unable to connect database: " . $db->connect_error);
}
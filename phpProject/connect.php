<?php

$dbhost = 'localhost';
$username = 'root';
$password = '';
$database = 'test';

//Connect to my database server
$db = new mysqli("$dbhost" , "$username" , "$password" , "$database");

echo "Good Work!!"

?>
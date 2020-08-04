#connect to sql server
<?php

$dbhost = 'localhost';
$username = 'root';
$password = '';
$database = 'test';

$db = new mysqli("$dbhost" , "$username" , "$password" , "$database");

echo "Good Work!!"

?>
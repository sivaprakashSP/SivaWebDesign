<?php

$dbhost = 'localhost';
$username = 'root';
$password = '';
$database = 'signup_details';

//Connect to my database server
$db = new mysqli("$dbhost" , "$username" , "$password" , "$database");

if($db == TRUE)
{
    echo "Good Work!!";
}
else
{
    echo "Failed to connect!!";
}

?>
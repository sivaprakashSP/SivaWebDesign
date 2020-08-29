<?php
$firstname = $_POST['firnam'];
$lastname = $_POST['lasnam'];
$email_id = $_POST['mail'];
$password = $_POST['pass'];
$mobile_no = $_POST['num'];

$dbconn = mysqli_connect('localhost' , 'root' , '' , 'signup_details');

$sql = "INSERT into details(firstname,lastname,email_id,password,mobile_no) values('$firstname','$lastname','$email_id','$password','$mobile_no')";

$run = mysqli_query($dbconn,$sql);

if($run == TRUE)
{
    echo 'Inserted';
}
else
{
    echo 'Error';
}


?>
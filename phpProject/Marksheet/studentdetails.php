<?php

$Name = $_POST['nam'];
$Register_no = $_POST['regno'];
$Password = $_POST['pass'];

$db = mysqli_connect('localhost' , 'root' , '' , 'datacenter');

$sql = "INSERT into studentdetails(Name,Register_no,Password) values('$Name','$Register_no','$Password')";


$run = mysqli_query($db,$sql);

if($run == TRUE)
{
    echo 'Inserted';
}
else
{
    echo 'Error';
}

?>
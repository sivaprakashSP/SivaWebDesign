<?php

$Name = $_POST['nam'];
$Staff_id = $_POST['regno'];
$Password = $_POST['pass'];

$db = mysqli_connect('localhost' , 'root' , '' , 'datacenter');

$sql = "INSERT into staffdetails(Name,Staff_id,Password) values('$Name','$Staff_id','$Password')";


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
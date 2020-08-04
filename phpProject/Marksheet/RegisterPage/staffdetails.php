<?php

$Name = $POST['nam'];
$Staff_id = $POST['regno'];
$Password = $POST['pass'];

$db = mysqli_connect('localhost' , 'root' , '' , 'datacenter');

$sql = "INSERT into admin(Name,Staff_id,Password) values('$Name','$Staff_id','$Password')";


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
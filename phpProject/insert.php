#inserting data into Database using php
<?php
$id = $_POST['id'];
$username = $_POST['user'];
$password = $_POST['pass'];

$dbconn = mysqli_connect('localhost' , 'test' , 'siva@123' , 'test');

//$sql = "INSERT into admin(id,username,password) values('1','Sivaprakash','20101999')";

$sql = "INSERT into admin(id,username,password) values('$id','$username','$password')";

$command = "DELETE FROM admin WHERE id = 20";
/*

$sql = mysqli_query($dbconn , "INSERT into admin(id,username,password) values('$id','$username','$password')");

if($sql)
{
    echo "Data inserted";
}
else
{
    echo "Failed to insert";
}

*/


$exec = mysqli_query($dbconn,$command);

if($exec == TRUE)
{
    echo 'Deleted';
}
else
{
    echo 'Error';
}


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
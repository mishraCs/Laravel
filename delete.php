<?php
$conn =  mysqli_connect("localhost","root","","aptron");
if(!$conn)
{
    echo "error in db connection";
}

$name = $_POST['user'];
$query = "delete from students where name='$name'";
if(mysqli_query($conn,$query))
{
    echo"record deleted!";
}
else
{
    echo"not deleted";
}



?>
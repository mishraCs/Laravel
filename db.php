<?php
$conn =  mysqli_connect("localhost","root","","aptron");
if(!$conn)
{
    echo "error in db connection";
}
else{
   $name =  $_POST['user'];
   $city =  $_POST['city'];
   $fees =  $_POST['fees'];
   if($name==="")
   {
    echo"Name is required!";
   }
   else if($city==="")
   {
    echo"City is required!";
   }
   else if($fees==="")
   {
    echo"Fees is required!";
   }
   else
   {
    $query = "insert into students(name,city,fees) values('$name','$city','$fees')";
    if(mysqli_query($conn,$query))
    {
     echo "Record added!";
    }
    else{
     echo "Record not added!";
    }
   }
   
}
?>
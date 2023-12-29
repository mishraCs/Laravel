<?php
 $conn = mysqli_connect("localhost", "root", "", "usingvscode");
 if (!$conn)
 {
    echo "connection failed";
 } else {
// ============ value add using html form; =============
    $name = $_POST['name'];
    $work = $_POST['work'];
    $workingTo = $_POST['workingTo'];
    if ($name == "")
    {
        echo "name is required";
    }else if ($work == "" )
       {
        echo "work is required";
       }else if ( $workingTo == "")
       {
        echo "why is required";
       }else{
    $query = "insert into firstdatabase(name, work, workingTo) values ('$name', '$work', '$workingTo')";
    if (mysqli_query($conn, $query))
    {
        echo "updation successful";
    } else {
        echo "updation failed";
    }
}
 }
// 
?>
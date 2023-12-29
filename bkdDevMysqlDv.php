<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "usingvscode";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "usingvscode");

//========== Check connection ====================
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//============= insertion in databse table ================; 
// if (!$conn)
// { 
//    echo "Connection failed"; 
// }else {
//    $query = "insert into firstdatabase (name, work, workingTo) values ('mern', 'exeldev', 'highertech')";
//       if (mysqli_query($conn,$query))
//       {
//         echo "Record add successfully !!!";
//       } else {
//         echo "Error : record not added ";
//       }
// }
//=============== Update in table ===============;
// $query = "update firstdatabase set work = 'majdoor' where id = '1' ";
// if (mysqli_query($conn, $query))
// {
//   echo "Updation successfull";
// } else {
//   echo "Updation failed";
// }
//================== delete from database ======================;
// $query = "delete from firstdatabase where id = '6'";
// if (mysqli_query($conn, $query))
// {
//   echo "Updation successfull";
// } else {
//   echo "Updation failed";
// }
// ================== showing record from database ==================
$query = "select name, work, workingTo from firstdatabase";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
echo "<table>";
while($row = mysqli_fetch_assoc($result))
{
    echo "</tr>";
    echo"<td>".$row['name']."<td>";
    echo "<td>".$row['work']."<td>";
    echo "<td>".$row['workingTo']."<td>";
    echo "</tr>";
}
echo "</table>";

?>
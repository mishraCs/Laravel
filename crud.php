<?php
$serveName = "localhost";
$databaseName = "aptron";
$userName = "root";
$password = "";

$conn = mysqli_connect($serveName, $userName, $password, $databaseName);
// var_dump($serveName);
// print_r(get_class($conn)); // return class name of the object
// print_r(get_class_methods($conn)); // return methods of the class 
// $q= "select * from student";
// $res = $conn->query("select * from student");

// var_dump($conn); // return variable($conn) type with values
if($conn){
    echo "Database connection successfully<br>";  
   // INSERT INTO `student` (`id`, `name`, `fees`, `city`) VALUES (NULL, 'vikas', '25000', 'noida');  
   

    $res = mysqli_query($conn, "select * from student");

    echo mysqli_num_rows($res);


$sql = "SELECT id,name,fees,city FROM student";
$result = $conn->query($sql);
echo '<pre>';
print_r(get_class_methods($result));
//while($row = $result->fetch_assoc()) {
    echo '<table>
    <tr>
        <td>id<td> 
        <td>fees<td> 
        <td>name<td> 
        <td>city<td> 
    <tr>';
while($row = $result->fetch_assoc()) 
{
    // for ($i = 0; $i < count($res); $i++) {
    echo '<tr>
                    <td>'.$row["id"].'<td> 
                    <td>'.$row["fees"].'<td> 
                    <td>'.$row["name"].'e<td> 
                    <td>'.$row["city"].'<td> 
                <tr>
            ';
        // };
        
}
echo '</table>';
}else{
    echo "failed";die("Error message: ");
}

// ==================== to add new row in table student;
// $sql = 'INSERT INTO student ( `name`, `fees`, `city`)
// VALUES ( "Aakash", 25000, "Bulandshahr")';

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>
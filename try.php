<?php 
require 'lib/conn.php';

$sql = 'SELECT * FROM students WHERE role = 1 ';
$result = mysqli_query($conn , $sql);
echo "<table>";

// $students = mysqli_fetch_assoc($result);

while($row = mysqli_fetch_assoc($result)){
    echo $row['email'] ;
}

?>
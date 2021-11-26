<?php 

$conn = mysqli_connect("localhost", "root", "", "jenish");

if(!$conn){
    echo "<script>alert('DataBase is not connected!');</script>";
}

?>
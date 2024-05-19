<?php
$servername="localhost";
$username= "root";
$password= "";
$database= "idk_Cottage";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("error detected". mysqli_connect_error($conn));
}

?>
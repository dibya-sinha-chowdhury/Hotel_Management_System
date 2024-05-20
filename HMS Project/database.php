<?php
    $conn = mysqli_connect("localhost", "root","","idkcottage");
    if($conn==false){
        die("Connection error".mysqli_connect_error());
    }
?>
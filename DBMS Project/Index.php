<?php
$Name = $_POST['$Name'];
$ID = $_POST['$ID'];
$Address = $_POST['$Address'];
$Phone = $_POST['$Phone'];
$Gender = $_POST['$Gender'];
$DOB = $_POST['$DOB'];
$Nationality = $_POST['$Nationality'];
$Room = $_POST['$Room'];
$Package = $_POST['$Package'];
$Check_in_Date = $_POST['$Check_in_Date'];
$Check_out_Date = $_POST['$Check_out_Date'];

//Database connection 
$conn = new mysqli('localhost','root','MySQL','password','IDK_Cottage');
if ($conn ->connect_error) {
    die('Connection Failed :'  $conn->connect_error);
}
else{
    $stmt = $conn -> prepare("insert into booking(Name,ID,Address,Phone,Gender,DOB,Nationality,Room,Package,Check_in_Date,Check_out_Date)
    values(?,?,?,?,?,?,?,?,?,?,?) ");
    $stmt -> bind_param("sssssisisii",$Name,$ID,$Address,$Phone,$Gender,$DOB,$Nationality,$Room,$Package,$Check_in_Date,$Check_out_Date);
    $stmt->excecute();
    $stmt->close();
    $conn->close();
}
?>
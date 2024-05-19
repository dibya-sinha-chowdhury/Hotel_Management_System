<?php
include 'database.php';

if(isset($_POST['Book'])){
    $Name=$_POST['Name'];
    $ID=$_POST['ID'];
    $Address=$_POST['Address'];
    $Phone=$_POST['Phone'];
    $Gender=$_POST['Gender'];
    $DOB=$_POST['DOB'];
    $Nationality=$_POST['Nationality'];
    $Room=$_POST['Room'];
    $Package=$_POST['Package'];
    $Check_in_Date=$_POST['Check_in_Date'];
    $Check_out_Date=$_POST['Check_out_Date'];

    $chkk="";
    foreach($Package as $chkk1){
        $chkk.=$chkk1.",";
    }

    $sql="insert into booking(Name,ID,Address,Phone,Gender,DOB,Nationality,Room,Package,Check_in_Date,Check_out_Date)
    values('$Name','$ID','$Address','$Phone','$Gender','$DOB','$Nationality','$Room','$chkk','$Check_in_Date','$Check_out_Date')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('New record inserted')</script>";
    }
    else{
        echo "error:" .mysqli_error($conn);
    }
    mysqli_close($conn);

}
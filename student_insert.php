<?php
include_once 'db2.php';
if(isset($_POST['submit']))
{    
     $fullname = $_POST['name'];
     $email = $_POST['email'];
     $classname = $_POST['cls_name'];
     $edu_year = $_POST['year'];
     $created_at= date('Y-m-d');
     
    
    
    $sql = "INSERT INTO student (fullname,email_id,class_name,edu_year,created_at)
     VALUES ('$fullname','$email','$classname','$edu_year','$created_at')";

     if (mysqli_query($conn, $sql)) {
        //echo "New record has been added successfully !";
        echo "New record has been added succesfully!<script>window.location.replace('index.php')</script>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

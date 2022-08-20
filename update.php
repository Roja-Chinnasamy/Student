<?php
error_reporting(1);
include_once 'db2.php';

// echo $_POST['update'];
// echo "[ ".$_POST['fullname'].$_POST['email_id'].$_POST['class_name'].$_POST['edu_year'].$_POST['idval']." ]";
// exit;
if($_POST['update'] == 'Update')
{    
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $classname = $_POST['cls_name'];
    $edu_year = $_POST['year'];
    $created_at= date('Y-m-d');
    $id = $_POST['idval'];

    $sql ="UPDATE student SET  fullname='$fullname',email_id='$email',class_name='$classname',edu_year='$edu_year',created_at='$created_at' WHERE id =$id";
}
else{
    echo 'nothing was update..';
} 

if (mysqli_query($conn,$sql)){

        echo ("<script LANGUAGE='JavaScript'>
        window. alert('Succesfully Updated');
        window. location. href='http://localhost/student/index.php';
        </script>");
} else{
        echo  'not updated' .mysqli_error($conn);
}

//    header("location: http://localhost/project/select.php");


$conn->close();
?>
      
    
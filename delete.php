<?php
error_reporting(0);
include_once 'db2.php';


$id = $_REQUEST['id'];

// echo $id; exit;

$sql = "DELETE FROM student WHERE id = $id";
$result = $conn->query($sql);

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
   // echo "record has been deleted succesfully!<script>window.location.replace('select.php')</script>";
   
  } 
 else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  if (mysqli_query($conn,$sql)){

    echo ("<script LANGUAGE='JavaScript'>
    window. alert('Succesfully deleted');
    window. location. href='http://localhost/student/index.php';
    </script>");
} else{
    echo  'not updated' .mysqli_error($conn);
}

  ?>
  
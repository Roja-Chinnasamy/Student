<?php
include_once 'db2.php';
if(isset($_POST['submit']))
{
    
   $subname = $_POST['subname'];
   $subcode = $_POST['code'];
   $stuid = $_POST['idval'];

   $createdat= date('Y-m-d');
   $numrows = $_POST['numrows'];

  
   if($numrows>0){
      $sql = "UPDATE subject SET subject_name= '$subname',subject_code = '$subcode' WHERE stu_id = '$stuid'";
   }else{
      $sql = "INSERT INTO subject (subject_name,subject_code,stu_id,created_at)
      VALUES ('$subname','$subcode','$stuid','$createdat')";
   }




   if (mysqli_query($conn, $sql)) {
      //echo "New record has been added successfully !";
      echo "New record has been added succesfully!<script>window.location.replace('index.php')</script>";
      ;
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>

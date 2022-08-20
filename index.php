<?php
error_reporting(1);
include_once 'db2.php';
//$sql = "SELECT * FROM student,subject WHERE student.id=subject.stu_id ORDER BY student.id DESC";

// $sql = "SELECT s.id AS sid,fullname,email_id,class_name,edu_year, sb.created_at, subject_name,subject_code 
//             FROM student AS s LEFT JOIN subject AS sb ON s.id = sb.stu_id ORDER BY student.id DESC";


 $sql = "SELECT student.id AS sid,fullname,email_id,class_name,edu_year, subject.created_at, subject_name,subject_code 
 FROM student  LEFT JOIN subject  ON student.id = subject.stu_id ORDER BY student.id DESC";



// $sql="SELECT * FROM subject INNER JOIN student ON student.id = subject.stu_id";
$result = $conn->query($sql);
$result->num_rows;

?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
 <title>Studentlist</title>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css'>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500" rel="stylesheet"/>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
 <link rel="stylesheet" href="style.css">
</head>

<body>

      <div class="row">
        <div class="container"> 
              <h1>Student List</h1> 
                <span style="margin-left:850px;"><a href="adduser.php"><button type="button" class="btn btn-primary">Add user</button></a></span>
                <table class="table responsive" id="sort">
              <thead>
              <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Email id</th>
                <th scope="col">Class Name</th>
                <th scope="col">Education year</th>
                <th scope="col">Subject Name</th>
                <th scope="col">Subject Code</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
              </thead>
<tbody>
             <?php
              while($row = $result->fetch_assoc()) {
              ?>
              <tr>
              <td><?=$row["fullname"];?></td>
              <td><?=$row["email_id"];?></td>
              <td><?=$row["class_name"];?></td>
              <td><?=$row["edu_year"];?></td>
              <td><?=$row["subject_name"];?></td>
              <td><?=$row["subject_code"];?></td>
              <td><?=$row["created_at"];?></td>
              <td> <a href="edituser.php?id=<?= $row['sid']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                   <a href="delete.php?id=<?= $row['sid']; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                   <a href="addsubject.php?id=<?= $row['sid']; ?>"><button type="button" class="btn btn-success">Add Subject</button></a>
              </td>
              </tr>
              <?php
              }
              ?>

              </tbody>
              </table>
              </div>
              </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>
<script src="function.js"></script>

</body>
</html>

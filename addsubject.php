<?php
error_reporting(1);
include_once 'db2.php';
$sid = $_REQUEST['id'];



$sql = "SELECT * FROM subject WHERE stu_id = $sid";
$result = $conn->query($sql);
$count  = $result->num_rows;
if($count >0 ){
    while($row = $result->fetch_assoc())
    {
        $subject_name = $row['subject_name'];
        $subject_code = $row['subject_code'];
    }
}
// while($row = $result->fetch_assoc())
// {
//     $fullname = $row['subject_name'];
//     $email = $row['email_id'];
//     $classname = $row['class_name'];
//     $edu_year = $row['edu_year'];
//     $created_at =  date('Y-m-d');   
    
// }
?>

<!Doctype html>
<html>
<head>
    <title>SUBJECT FORM</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- <button><a href="index.php">Back</a></button> -->
        <div class="container mt-3">
        <form class="was-validated" action="subject_insert.php" method="POST" enctype="multipart/form-data">
        <h1> SUBJECT FORM </h1>

                <div class="row">
                    <div class="col-md-6">
                        <label for="subname" >Subject Name :</label>
                    </div>
                    <div class="col-md-6">
                        <input type="textbox" class="form-control" id="subname" placeholder="Enter the subname" name="subname" value="<?php echo $subject_name;?>">
                    </div>
                </div><br> 
                                    
                <div class="row">
                    <div class="col-md-6">
                        <label>Subject Code :</label>
                    </div>
                    <div class="col-md-6">
                        <input type ="text" class="form-control" id="code" placeholder="Enter a subcode" name="code" value="<?php echo $subject_code;?>">
                    </div>
                </div><br /><br>
                
                <div class="row">
                    <button class="btn btn-primary mt-3" name="submit" value="save">Submit</button>
                    <input type="hidden" name="idval" value= <?php echo $_REQUEST['id']; ?>>
                    <input type="hidden" name="numrows" value= <?php echo $count; ?>>
                </div>                  
        </form>
        </div>
</body>
</html>
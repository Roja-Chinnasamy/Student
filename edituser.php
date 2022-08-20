<?php
error_reporting(1);
include_once 'db2.php';



$id = $_REQUEST['id'];



$sql = "SELECT * FROM student WHERE id = $id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    $fullname = $row['fullname'];
    $email = $row['email_id'];
    $classname = $row['class_name'];
    $edu_year = $row['edu_year'];
    // $created_at =  date('Y-m-d');   
    
}
?>



<!Doctype html>
<html>
<head>
    <title>STUDENT FORM</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<span style="margin-left:800px;"><a href="index.php"><button type="button" class="btn btn-primary">Back</button></a></span>
        <div class="container mt-3">
            <form class="was-validated" action="update.php" method="POST" enctype="multipart/form-data">
                <h1> STUDENT FORM </h1>
                    
                <div class="row">
                    <div class="col-md-6">
                        <label for="name" >Full Name :</label>
                    </div>
                    <div class="col-md-6">
                            <input type="textbox" class="form-control" id="name" placeholder="Enter the name" name="name" value="<?=$fullname;?>">
                    </div>
                </div><br> 
                                        
                <div class="row">
                    <div class="col-md-6">
                        <label>E-mail Address:</label>
                    </div>
                    <div class="col-md-6">
                        <input type ="text" class="form-control" id="email" placeholder="Enter a email" name="email" value="<?=$email;?>" required>
                    </div>
                </div><br /><br>
                                                    
                <div class="row">
                    <div class="col-md-6">
                        <label>Class Name :</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" id="class" name="cls_name">
                            <option>select-classname</option>
                            <option <?php if($classname == 'X'){ ?> selected= "selected" <?php } ?>>X</option>
                            <option <?php if($classname == 'XI'){ ?> selected= "selected" <?php } ?>>XI</option>
                            <option <?php if($classname == 'XII'){ ?> selected= "selected" <?php } ?>>XII</option>
                            </select>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-md-6">
                        <label>Year :</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" id="edu_year" name="year">
                            
                            <option <?php if($edu_year == '2022'){ ?> selected= "selected" <?php } ?>>2022</option>
                            <option <?php if($edu_year == '2023'){ ?> selected= "selected" <?php } ?>>2023</option>
                        </select>
                    </div>
                </div><br>
                    
                <div class="row">
                    <button class="btn btn-primary mt-3" name="update" value="Update">Update</button>
                    <input type="hidden" name="idval" value= <?php echo $_GET['id']; ?>>
                </div>    
                                
            </form>
        </div>
</body>
</html>

                                       
                                    
                                       


                    
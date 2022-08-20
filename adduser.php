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

 <?php
// define variables and set to empty values
$nameErr = $emailErr = $classnameErr = $educationErr = "";
$name = $email = $classname = $education = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["classname"])) {
    $classnameErr = "Classname is required";
  } else {
    $classname = test_input($_POST["classname"]);
  }
    if (empty($_POST["education"])) {
        $educationErr = "Education is required";
      } else {
        $education = test_input($_POST["education"]);
    
      }  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 




<span style="margin-left:800px;"><a href="index.php"><button type="button" class="btn btn-primary">Back</button></a></span>
        <div class="container mt-3">   
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  </form>
            <form class="was-validated" action="student_insert.php" method="POST" enctype="multipart/form-data">
            <h1> STUDENT FORM </h1>
                
            <div class="row">
                <div class="col-md-6">
                    <label for="name" >Full Name :</label>
                </div>
                <div class="col-md-6">
                    <input type="textbox" class="form-control" id="name" placeholder="Enter the name" name="name" value="<?php echo $name;?>" required>
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
            </div><br> 
                                    
            <div class="row">
                <div class="col-md-6">2
                    <label>E-mail Address :</label>
                </div>
                <div class="col-md-6">
                    <input type ="text" class="form-control" id="email" placeholder="Enter a email" name="email" value="<?php echo $email;?>" required>
                    <span class="error">* <?php echo $emailErr;?></span>
                </div>
            </div><br /><br>
                                                
            <div class="row">
                <div class="col-md-6">
                    <label>Class Name :</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" id="class" name="cls_name" value="<?php echo $classname;?>" required>
                    <span class="error">* <?php echo $classnameErr;?></span>
                        <option selected></option>
                        <option>X</option>
                        <option>XI</option>
                        <option>XII</option>
                        </select>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label>Year :</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" id="edu_year" name="year" value="<?php echo $education;?>" required>
                    <span class="error">* <?php echo $educationErr;?></span>
                        <option selected></option>   
                        <option>2022</option>
                        <option>2023</option>
                    </select>
                </div>
            </div><br>
                
            <div class="row">
                <button class="btn btn-primary mt-3" name="submit" value="submit">Submit</button>
            </div>    
                                
            </form>
        </div>
 <?php
 echo $name;
 echo "<br>";
 echo $email;
 echo "<br>";
 echo $classname;
 echo "<br>";
 echo $education;
 echo "<br>";

?>         



</body>
</html>

<!-- onclick="chkValidation();" -->
<!-- <script>
    function chkValidation(){
        
        if(document.getElementById('name').value ==""){
            alert("name field should not be empty!.");
            // document.getElementById('name').focus();
            // return false;
        }
        
        return false;
    }
</script> -->


                                       
                                    
                                       


                    
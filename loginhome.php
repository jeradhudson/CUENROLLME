<?php
require_once 'inc/header.php';

session_start();

$conn = new mysqli("localhost","cs09","CUpQdSsj","cs09");
$msg = "";

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  //$password = sha1($password);
  $userType = $_POST['userType'];

  $sql = "SELECT * FROM users WHERE username=? AND password=?
  AND user_type=?";
  $stmt = $conn->prepare($sql);
  $stmt -> bind_param("sss", $username, $password, $userType);
  $stmt -> execute();
  $result = $stmt -> get_result();
  $row = $result -> fetch_assoc();

  session_regenerate_id();
  $_SESSION['username'] = $row['username'];
  $_SESSION['role'] = $row['user_type'];
  session_write_close();
if($result -> num_rows==1 && $_SESSION['role'] == "student"){
  header("location:student.php");
  }
  elseif ($result -> num_rows==1 && $_SESSION['role'] == "teacher") {
    header("location:teacher.php");
  }
  elseif ($result -> num_rows==1 && $_SESSION['role'] == "admin") {
    header("location:adminhome.php");
  }
elseif ($result -> num_rows==1 && $_SESSION['role'] == "Chair") {
    header("location:chairhome.php");
  }
elseif ($result -> num_rows==1 && $_SESSION['role'] == "secretary") {
    header("location:secretaryhome.php");
  }

else {
  $msg = "Incorrect Username OR Password!";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Justin Winchester">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CAPSTONE PROJECT MULTI-ROLE USER ACCESS TEST</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
 crossorigin="anonymous">
</head>
<body class="bg-dark">
<div class="container">
  <div class="row justify-content-center">
<div class="col-lg-5 bg-light mt-5 px-0">
<h3 class="text-center text-light bg-danger p-3">Student & Faculty Web Application
   for Enrollment & Advisement</h3>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method = "post" class="p-4">
<div class="form-group">
<input type="text" name="username" class="form-control form-control-lg" placeholder="Username"
required>
</div>
<div class="form-group">
<input type="password" name="password" class="form-control form-control-lg" placeholder="Password"
required>
</div>
<div class="form-group lead">
<label for="userType">I am a :</label>
<input type="radio" name="userType" value="student" class="custom-radio" required>&nbsp;Student|
<input type="radio" name="userType" value="teacher" class="custom-radio" required>&nbsp;Teacher|
<input type="radio" name="userType" value="secretary" class="custom-radio" required>&nbsp;Secretary|
<input type="radio" name="userType" value="Chair" class="custom-radio" required>&nbsp;Chair|
<input type="radio" name="userType" value="admin" class="custom-radio" required>&nbsp;Admin
</div>
<div class="form-group" id="grad1">
  <input type="submit" name="login" class="btn btn-danger btn-block" >
</div>
<h5 class="text-danger text-center"><?= $msg; ?></h5>
</form>
</div>
</div>
</div>
</body>
</html>

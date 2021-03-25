<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/../lib/Session.php";
Session::init();



spl_autoload_register(function($classes){

  include 'classes/'.$classes.".php";

});


$users = new Users();

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Enrollment Web Application CU ENROLL ME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/index.css" rel="stylesheet">
<link href="css\styles.css" rel="stylesheet">
  <link href="css\join.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  //\\ Session::set('logout', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  // <strong>Success !</strong> You are Logged Out Successfully !</div>');
  Session::destroy();
}



 ?>


<body>
<div class="navbar">
	
    <a href="index.html" class="brand-logo">
        <img src="cu-logo.svg">
             </a>

  <button><a href="discover.html">UNIVERSITY INFO</a></button>
  <button><a href="join.html">APPLY FOR REGISTRATION</a></button>
 <button><a href="loginhomepage.php"> ALUMNI <br>LOGIN</a></button>
</div>

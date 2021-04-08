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
      

          <?php if (Session::get('id') == TRUE) { ?>
          

<?php if (Session::get('roleid') == '5') { ?>
             
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">



	<li class="nav-item">

                  <a class="nav-link" href="index.php"><i class="fas fa-users mr-2"></i>User lists </span></a>
              </li>
              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'addUser') {
                            echo " active ";
                          }

                         ?>">

                <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </span></a>
              </li>
				
 <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'addUser') {
                            echo " active ";
                          }

                         ?>">


                <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user3 </span></a>
              </li>

<li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'adminhome') {
                            echo " active ";
                          }

                         ?>">


                <a class="nav-link" href="adminhome.php"><i class="fas fa-user-plus mr-2"></i>Admin Portal </span></a>
              </li>


	<li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'addUser') {
                            echo " active ";
                          }

                         ?>">


                <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </span></a>
              </li>
                            
            <li class="nav-item
            <?php

      				$path = $_SERVER['SCRIPT_FILENAME'];
      				$current = basename($path, '.php');
      				if ($current == 'profile') {
      					echo "active ";
      				}

      			 ?>

            ">
<?php } ?>

              <a class="nav-link" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
            </li>
		

<?php if(Session::get('roleid')==2){?>
			<li class="nav-item">
               <a class="nav-link" href="faculty.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="MyteachSched.php">
               <i class="fa fa-fw fa-user"></i>
               <span>Professor</span></a>
            </li>
			<?php } ?>

<?php if(Session::get('roleid')==3){?>
			<li class="nav-item">
               <a class="nav-link" href="chairhome.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="adminUser.php">
               <i class="fa fa-fw fa-user"></i>
               <span>Chair</span></a>
            </li>
			<?php } ?>

<?php if(Session::get('roleid')==4){?>
			<li class="nav-item">
               <a class="nav-link" href="secretaryhome.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="student.php">
               <i class="fa fa-fw fa-user"></i>
               <span>Secretary</span></a>
            </li>
			<?php } ?>
<?php if(Session::get('roleid')==1){?>
			<li class="nav-item">
               <a class="nav-link" href="student.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="student.php">
               <i class="fa fa-fw fa-user"></i>
               <span>Student</span></a>
            </li>
			<?php } ?>









            <li class="nav-item">
              <button><a href="?action=logout">LOGOUT</a></button>
            </li>
          <?php }else{ ?>

              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.html');
                          if ($current == 'join') {
                            echo " active ";
                          }

                         ?>">
                <button><a href="join.html">APPLY FOR REGISTRATION</a></button>
              </li>
              <li class="nav-item
                <?php

                    				$path = $_SERVER['SCRIPT_FILENAME'];
                    				$current = basename($path, '.php');
                    				if ($current == 'login') {
                    					echo " active ";
                    				}

                    			 ?>">
                <button><a href="login.php">ALUMNI LOGIN</a></button>
              </li>

          
            <li class="nav-item">
              <button><a  href="?action=logout">LOGOUT</a></button>
            </li>
  
<?php } ?>


          </ul>

        </div>
      </nav>
</div>
<div class="container">


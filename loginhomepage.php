<?php
require_once 'inc/header.php';

$conn = new mysqli("localhost","cs12","CUaDGKK8","cs12");
$msg = "";

if(isset($_POST['login'])){
  $useremail = $_POST['useremail'];
  $password = $_POST['password'];
  //$password = sha1($password);
 // $userType = $_POST['userType'];

    $sql = "SELECT * FROM tbl_users WHERE email=? AND password=?";
   
  $stmt = $conn->prepare($sql);
  $stmt -> bind_param("ss", $useremail, $password);
  $stmt -> execute();
  $result = $stmt -> get_result();
  $row = $result -> fetch_assoc();

  session_regenerate_id();
  $_SESSION['useremail'] = $row['email'];
  $_SESSION['userrole'] = $row['roleid'];
  session_write_close();
if($result -> num_rows==1 && $_SESSION['userrole'] == "1"){
  header("location:student.php");
  }
  elseif ($result -> num_rows==1 && $_SESSION['userrole'] == "2") {
    header("location:faculty.php");
  }
  elseif ($result -> num_rows==1 && $_SESSION['userrole'] == "5") {
    header("location:adminhome.php");
  }
elseif ($result -> num_rows==1 && $_SESSION['userrole'] == "3") {
    header("location:chairhome.php");
  }
elseif ($result -> num_rows==1 && $_SESSION['userrole'] == "4") {
    header("location:secretaryhome.php");
  }

else {
  $msg = "Incorrect Username OR Password!";
}
}
?>


<body class="full-height-grow">
      
    <section class="join-main-section">
      <h1 class="join-text">
        CU Enroll
        <span class="accent-text">Today!</span>
	      </h1>
  </form>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method = "post" class="join-form">
      <div class="input-group">
	<label>User Email:</label>
	<input type="text" name="useremail" class="form-control form-control-lg" placeholder="USER NAME / EMAIL "
      required>
      </div>
      <div class="input-group ">
	<label>Password</label>
	 <input type="password" name="password" class="form-control form-control-lg" placeholder="Password"
      required>
      </div>
           <div class="input-group">
        <input type="submit" name="login" class="btn" >
      </div>
  </section>
  </div>

  <div class="join-page-circle-1"></div>
  <div class="join-page-circle-2"></div>

 
<?php
  include 'inc/footer.php';

  ?>

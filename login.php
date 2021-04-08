<?php
include 'inc/header.php';
Session::CheckLogin();
?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
   $userLog = $users->userLoginAuthentication($_POST);
}
if (isset($userLog)) {
  echo $userLog;
}

$logout = Session::get('logout');
if (isset($logout)) {
  echo $logout;
}



 ?>
<body class="full-height-grow">
      
    <section class="join-main-section">
      <h1 class="join-text">
        CU Enroll
        <span class="accent-text">Today!</span>
	      </h1>
  </form>
      <form action="" method = "post" class="join-form">
      <div class="input-group">
	<label for="email" >User Name:</label>
	<input type="email" name="email" class="form-control form-control-lg" placeholder="EMAIL"
      required>
      </div>
      <div class="input-group ">
	<label for="password">Password</label>
	 <input type="password" name="password" class="form-control form-control-lg" placeholder="Password"
      required>
      </div>
           <div class="input-group">
         <button type="submit" name="login" class="btn btn-success">Login</button>      </div>
  </section>
  </div>

  <div class="join-page-circle-1"></div>
  <div class="join-page-circle-2"></div>

 
<?php
  include 'inc/footer.php';

  ?>

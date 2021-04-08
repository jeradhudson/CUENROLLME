<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '5') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

  $userAdd = $users->addNewUserByAdmin($_POST);
}

if (isset($userAdd)) {
  echo $userAdd;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Add New User</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                 <div class="form-group">
                  <label for="username">Your First Name</label>
                  <input type="text" name="facfname"  class="form-control">
                </div>
		 <div class="form-group">
                  <label for="username">Your Last Name</label>
                  <input type="text" name="faclname"  class="form-control">
                </div>
		<div class="form-group">
                  <label for="facOphone">Faculty Office Phone</label>
                  <input type="text" name="facOphone"  class="form-control">
                </div>
		<div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
		 <div class="form-group">
                  <label for="faclocation">Faculty Location</label>
                  <input type="text" name="faclocation" class="form-control">
                </div>
		 <div class="form-group">
                  <label for="facphone">Faculty Phone</label>
                  <input type="text" name="facphone"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="depid">Department Id</label>
                  <input type="text" name="depid"  class="form-control">
                </div>
                 <div class="form-group">
                  <div class="form-group">
                    <label for="sel1">Select user Role</label>
                    <select class="form-control" name="roleid" id="roleid">
                      <option value="5">Admin</option>
                      <option value="4">Secretary</option>
                      <option value="3">Chair</option>
		      <option value="2">Faculty</option>
		       <option value="1">Student</option>
      

		
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" name="addUser" class="btn btn-success">Register</button>
                </div>


            </form>
          </div>


        </div>
      </div>

<?php
}else{

  header('Location:index.php');



}
 ?>

  <?php
  include 'inc/footer.php';

  ?>

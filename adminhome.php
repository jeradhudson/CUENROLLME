<?php
 require_once 'inc/header.php';



  if(!isset($_SESSION['useremail']) || $_SESSION['userrole'] != "5"
){
  header("location:index.html");
}
?>
<body class="full-height-grow">
 
<div class="sidebar">
  <a href="admin.php"><i class="fa fa-fw fa-home"></i> Manage Students</a>
  <a href="adminfaculty.php"><i class="fa fa-fw fa-wrench"></i>Mangage Faculty </a>
  <a href="adminUser.php"><i class="fa fa-fw fa-user"></i> Manage Course & Semesters</a>
  <a href="adminstudent.php"><i class="fa fa-fw fa-envelope"></i> Mangage Request</a>
  <a href="login.php"><i class="fa fa-fw fa-envelope"></i>Admin Portal </a>
 <a href="webform.php"><i class="fa fa-fw fa-envelope"></i> Contact Faculty & Students</a>


</div>


<div class="container full-height-grow" >
  <h1>Hi! : <?= $_SESSION['useremail']?></h1>
  <h2>Your a  : <?= $_SESSION['userrole']?></h2>
  <p>Your <h3>C.R.U.D</h3> Station Is Ready To GO!!</p>
  <a href="logout.php">Logout</a>
<div class="main">
  <h2>Sidebar with Icons</h2>
  <p>This side navigation is of full height (100%) and always shown.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<h2>Sidebar with Icons</h2>
  <p>This side navigation is of full height (100%) and always shown.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<h2>Sidebar with Icons</h2>
  <p>This side navigation is of full height (100%) and always shown.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<h2>Sidebar with Icons</h2>
  <p>This side navigation is of full height (100%) and always shown.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<h2>Sidebar with Icons</h2>
  <p>This side navigation is of full height (100%) and always shown.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>





</div>

</div>
<?php
  include 'inc/footer.php';

  ?>


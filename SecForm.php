<?php	
	$sid = $s_first = $s_last = $aid = $major = ''; //Student Variables
	$fid = $f_first = $f_last = $dept = ''; //Faculty (Advisor) Variables
	
	if (isset($_POST['sid'])) $sid = sanitizeString($_POST['sid']); //Student ID
	if (isset($_POST['s_first'])) $s_first = sanitizeString($_POST['s_first']); //Student First Name
	if (isset($_POST['s_last'])) $s_last = sanitizeString($_POST['s_last']); //Student Last Name
	if (isset($_POST['aid'])) $aid = sanitizeString($_POST['aid']); // Advisor ID that is assigned to student
	if (isset($_POST['major'])) $major = sanitizeString($_POST['major']); //Student's Major
	
	if (isset($_POST['fid'])) $fid = sanitizeString($_POST['fid']); //Faculty ID
	if (isset($_POST['f_first'])) $f_first = sanitizeString($_POST['f_first']); //Faculty First Name
	if (isset($_POST['f_last'])) $f_last = sanitizeString($_POST['f_last']); //Faculty Last Name
	if (isset($_POST['dept'])) $dept = sanitizeString($_POST['dept']); //Department of Faculty Member
	
	echo <<<_END
	
	<html> 
		<head>
			<style>
			.item1 { grid-area: header; }
			.item2 { grid-area: confirm; }
			.item3 { grid-area: student; }
			.item4 { grid-area: faculty; }
			.item5 { grid-area: slist; }
			.item6 { grid-area: flist; }
			
			.grid-container {
			  display: grid;
			  grid-template-areas:
				'header header header header header header'
				'confirm confirm confirm confirm confirm confirm'
				'student student student faculty faculty faculty'
				'slist slist slist flist flist flist';
			  grid-gap: 10px;
			  background-color: white;
			  padding: 10px;
			}
			
			.grid-container > div {
			  background-color: lightgray;
			  text-align: center;
			  padding: 20px 0;
			  font-size: 30px;
			}
			</style>
			
			<script type="text/javascript">
			
			   function changeFunc1() {
					var selectBox1 = document.getElementById("selectBox1");
					var selectedValue = selectBox1.options[selectBox1.selectedIndex].value;
					
					var student = document.getElementById("sid");
					student.value = selectedValue;
			   }
			   
			   function changeFunc2() {
					var selectBox2 = document.getElementById("selectBox2");
					var selectedValue = selectBox2.options[selectBox2.selectedIndex].value;
					
					var faculty = document.getElementById("fid");
					faculty.value = selectedValue;
			   }
			
			</script>
		</head>
			
		<body>
		
				
			<div class="grid-container">
			  <div class="item1">Assign Student</div>
			  <div class="item2">Assign <input type="text" id="sid" name="sid" placeholder="Student ID"> to 
					<input type="text" id="fid" name="fid" placeholder="Faculty ID">
					<button type="button" onclick="">Confirm</button><br>
					Tamaki Haruno (th807452) is assigned to Chao Zhao (FID) (Example of Completion)
			  </div>
			  <div class="item3">Student <button type="button" onclick="">Search</button><br>
				<form method="post" action="">
					First Name: <input type="text" name="s_first" placeholder="any">
					Advisor ID: <input type="text" name="aid" placeholder="any"> <br />
					Last Name: <input type="text" name="s_last" placeholder="any">
					Major: 	<select name="major" size="1">
								<option value="any">any</option>
								<option value="CS">CS</option>
								<option value="IT">IT</option>
							</select> <br />
					Student ID: <input type="text" name="sid" placeholder="any">
				</form>
			  </div>  
			  <div class="item4">Faculty <button type="button" onclick="">Search</button><br>
				<form method="post" action="">
					First Name: <input type="text" name="f_first" placeholder="any">
					Faculty ID: <input type="text" name="fid" placeholder="any"> <br />
					Last Name: <input type="text" name="f_last" placeholder="any">
					Department: <select name="dept" size="1">
									<option value="any">any</option>
									<option value="CS">CS</option>
									<option value="IT">IT</option>
								</select>
				</form>
			  </div>
			  <div class="item5">SID firstname lastname advisorID major <br />
					<select id="selectBox1" size="5" onchange="changeFunc1();">
					   <option value="1">1</option>
					   <option value="2">2</option>
					   <option value="3">3</option>
					   <option value="1">1</option>
					   <option value="2">2</option>
					   <option value="3">3</option>
					</select>
			  </div>
			  <div class="item6">FID firstname lastname deptID <br />
					<select id="selectBox2" size="5" onchange="changeFunc2();">
					   <option value="1">1</option>
					   <option value="2">2</option>
					   <option value="3">3</option>
					   <option value="1">1</option>
					   <option value="2">2</option>
					   <option value="3">3</option>
					</select>
			  </div>
			</div>
		</body>
	</html>
	_END;

	function sanitizeString($var)
    {
    	if(get_magic_quotes_gpc())
        	$var = stripslashes($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }    
?>
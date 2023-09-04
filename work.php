<?php
	session_start();

	if(!isset($_SESSION['username']))
	{
		header('location:loginpage.php');
	}

	// $name = "";
	$roll = "";
	$course1 = "";
	$course2 = "";
	$type = "";
	$idate = "";
	$ddate = "";
	$challan = "";
	$no = "";
	$cno = "";

	if(isset($_POST['submitbtn']))
	{
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$course1 = $_POST['c1'];
		$course2 = $_POST['c2'];
		$type = $_POST['type'];
		$idate = $_POST['issuedate'];
		$ddate = $_POST['duedate'];
		$fee = $_POST['total'];
		$sr = $_POST['sr1'];
		$srr = $_POST['sr2'];
		$co = $_POST['co1'];
		$col = $_POST['co2'];
		$am = $_POST['am1'];
		$amo = $_POST['am2'];


		$courses = $course1." & ".$course2;


		$record = 0;
		require 'connection.php';

		$query = "SELECT * FROM `challanform`";
		$result = mysqli_query($conn, $query);

		
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
				if($row['RollNo'] == $roll)
				{
					$record = 1;
					$challan = $row['RollNo'];
					echo '<script>alert("Data Already Exists")</script>';
				}
				$no = (int)$row['ChallanNo'];
			}
			$cno = $no+1;
			// echo $cno.'<br>'.gettype($cno);
		}

		if(!$record == 1)
		{
			$query = "INSERT INTO `challanform`(`ChallanNo`,`Name`, `RollNo`, `Courses`, `Type`,`IssueDate`, `DueDate`, `TotalFee`) VALUES ('$cno','$name','$roll','$courses','$type','$idate','$ddate','$fee')";
			$result = mysqli_query($conn, $query);
			echo '<script>alert("Data Entered Successfully")</script>';
		}


		$query = "SELECT * FROM `challanform`";
		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
				if($row['RollNo'] == $roll)
				{
					$challan = "YETP-".$row['ChallanNo'];
					echo '<script>alert("Challan Form Generated Successfully")</script>';
				}
			}
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		
		<title>YETP 07-14-2021</title>

		<link rel="stylesheet" type="text/css" href="work.css">

		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

		<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script> -->

	</head>

	<body>

		<form action="" method="post" id="ChallanForm">
			<div class="col-sm-4 left">

				<div class="head">
					<br>
					<div class="form-group-one">
						<p class="CNo">
							<label for="l_challan" class="col-sm-5 control-label" style="margin-top: 1%;">Challan No: </label>
							<div class="col-sm-14">
								<input type="text" class="form-control" name="challan" id="l_challan" value="<?php if(isset($_POST['submitbtn'])){echo $challan; }?>" readonly> 
							</div>
						</p>
					</div>
				</div>
				<center>
				<div class="logo">
					<!-- logo -->
					<img src="1.jpg" height="130" width="140">
				</div>

				
				<div  class="YETP">
					<h2>YETP</h2>
					<p>
						Customer Code: YETP
						<br>
						YOUTH EMPOWERMENT
						<br>
						TRAINING PROGRAM
						<br>
						<h3 style="margin: 0px;">
							BANK COPY
						</h3>
					</p>
				</div>

				</center>

				<div class="one">

					<br>
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="l_name" class="col-sm-4 control-label" style="margin-top: 1%;">Name:</label>
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control"  name="name" id = "l_name" value="<?php if(isset($_POST['submitbtn'])){ echo $name; }?>" readonly required>
						</div>
					</div>
					<!-- <br> -->
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="l_roll" class="col-sm-4 control-label" style="margin-top: 1%;">Roll no:</label>
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="roll" id="l_roll" value="<?php if(isset($_POST['submitbtn'])){ echo $roll; }?>" readonly required> 
						</div>
					</div>
					<!-- <br> -->
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="l_c1" class="col-sm-4 control-label" style="margin-top: 1%;">Course 1:</label> 
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="c1" id="l_c1" value="<?php if(isset($_POST['submitbtn'])){ echo $course1; }?>" readonly>
						</div>
					</div>
					<!-- <br> -->
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="l_c2" class="col-sm-4 control-label" style="margin-top: 1%;">Course 1:</label> 
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="c2" id="l_c2" value="<?php if(isset($_POST['submitbtn'])){ echo $course2; }?>" readonly>
						</div>
					</div>

				</div>

				<!-- <div class="two">
					
					<div class="twoone">
						<p>
							Office use only
						</p>
					</div>

					<div class="twotwo">
						
					</div>

				</div> -->

				<div class="coursetype" style="margin-top: 39%;">
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="l_ctype" class="col-sm-6 control-label" style="margin-top: 2%;">Select Course Type: </label>
						</p>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="type" id="l_ctype" value="<?php if(isset($_POST['submitbtn'])){ echo $type; }?>" readonly>
						</div>
					</div>
				</div>	

				<div class="three">
					<div class="threeone">
						<div class="form-group-one">
							<p class="text-sm-left">
								<label for="l_issuedate" class="col-sm-4 control-label" style="margin-top: 1%;">Issue Date: </label>
							</p>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="issuedate" id="l_issuedate" autosave="on" value="<?php if(isset($_POST['submitbtn'])){ echo $idate; }?>" readonly required>
							</div>
						</div>
					</div>

					<div class="threetwo">
						<div class="form-group-one">
							<p class="text-sm-left">
								<label for="l_duedate" class="col-sm-4 control-label" style="margin-top: 1%;">Due Date: </label>
							</p>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="duedate" id="l_duedate" value="<?php if(isset($_POST['submitbtn'])){ echo $ddate; }?>" readonly required> 
							</div>
						</div>
					</div>
				</div>

				<div class="four">
					<div class="table-responsive-sm fourtwo">
						<table class="table">
							<caption><center><h3 style="color: black;">Fee Voucher</h3></center></caption>
							<thead>
								<tr>
									<th scope="col" style="width: 20%;">
										Sr.No
									</th>
									<th scope="col" style="width: 60%;">
										Course
									</th>
									<th scope="col" style="width: 20%;">
										Amount
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td scope="row"><input type="text" id="l_id1" name="sr1" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $sr; }?>"></td>
									<td><input type="text" id="l_co1" name="co1" style="width: 100%;" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $co; }?>"></td>
									<td><input type="text" id="l_am1" name="am1" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $am; }?>"></td>
								</tr>
								<tr>
									<td scope="row"><input type="text" id="l_id2" name="sr2" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $srr; }?>"></td>
									<td><input type="text" id="l_co2" name="co2" style="width: 100%;" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $col; }?>"></td>
									<td><input type="text" id="l_am2" name="am2" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $amo; }?>"></td>
								</tr>
							</tbody>

						</table>

						<div class="form-group-one fourone">
							<p class="text-sm-left">
								<label for="l_total" class="col-sm-4 control-label" style="margin-top: 1%;">Total: </label>
							</p>
							<div class="col-sm-3" style="margin-left: 2%;">
								<input type="text" class="form-control" name="total" id="l_total" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $fee; }?>" required> 
							</div>
						</div>
					</div>
				</div>

				<div class="five">
					<h4 style="margin-left: 5%;"> Note: </h4>
					<p>
				    	<ol>
					        <li>
					        	Student are request to pay their 
					            callans on time and payments
					            should be made through cash only!
					        </li>
					        <li>
					        	Tuition fee in non-refundable.
					        </li>
					        <li>
					        	Student applied in programs during
				            	fee submission procedures,
				            	will be unable to change course after classes start 
				            </li>
				            <li>
				            	A student can enroll in Maximum 2 
				                courses. 
				            </li>
				            <li>
				            	All fees will be payable in one-time
				                for online students, free will be
				                payable in modules for onsite students. 
				            </li>
				            <li>
				            	Keep your challan copy safe, as
				                you'll not be allowed to sit in class
				                in case you lost it.  
				            </li>
				            <li>
				            	YETP management will decide Campus
				                for student classes, 
				                if any student will get any genuine issue 
				                with their campus they can send application
				                request to YETP Management for any change.
				            </li>
				   	 	</ol>
					</p>
					
				</div>

			</div>
			
			<div class="col-sm-4 middle">

				<div class="head">
					<br>
					<div class="form-group-one">
						<p class="text-sm-left CNo">
							<label for="m_challan" class="col-sm-5 control-label" style="margin-top: 1%;">Challan No: </label>
						</p>
						<div class="col-sm-14">
							<input type="text" class="form-control" name="challan" id="m_challan" value="<?php if(isset($_POST['submitbtn'])){echo $challan; }?>" readonly> 
						</div>
					</div>
				</div>

				<center>

				<div class="logo">
					<!-- logo -->
					<img src="1.jpg" height="130" width="140">
				</div>

				
				<div class="YETP">
					<h2>YETP</h2>
					<p>
						Customer Code: YETP
						<br>
						YOUTH EMPOWERMENT
						<br>
						TRAINING PROGRAM
						<br>
						<h3 style="margin: 0px;">
							OFFICE COPY
						</h3>
					</p>
				</div>

				</center>

				<div class="one">

					<br>
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="m_name" class="col-sm-4 control-label" style="margin-top: 1%;">Name:</label>
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control"  name="name" id = "m_name" value="<?php if(isset($_POST['submitbtn'])){ echo $name; }?>" required>
						</div>
					</div>
					<!-- <br> -->
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="m_roll" class="col-sm-4 control-label" style="margin-top: 1%;">Roll no:</label>
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="roll" id="m_roll" value="<?php if(isset($_POST['submitbtn'])){ echo $roll; }?>" required> 
						</div>
					</div>
					<!-- <br> -->
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="m_c1" class="col-sm-4 control-label" style="margin-top: 1%;">Course 1:</label> 
						</p>
						<div class="col-sm-8">
							<select name="c1" id="m_c1" selected="<?php if(isset($_POST['submitbtn'])){ echo $course1; }?>" class="form-control" required style="text-align: center;">
								<option></option>
								<option value="Machine Learning" <?php if($course1 == "Machine Learning"){echo 'selected = "selected"';} ?>>Machine Learning</option>
								<option value="MERN Stack" <?php if($course1 == "MERN Stack"){echo 'selected = "selected"';} ?>>MERN Stack</option>
								<option value="AWS Solution Architecture" <?php if($course1 == "AWS Solution Architecture" ){echo 'selected = "selected"';} ?>>AWS Solution Architecture</option>
								<option value="Wordpress Development" <?php if($course1 == "Wordpress Development"){echo 'selected = "selected"';} ?>>Wordpress Development</option>
								<option value="Digital Marketing" <?php if($course1 == "Digital Marketing"){echo 'selected = "selected"';} ?>>Digital Marketing</option>
								<option value="Python Programming" <?php if($course1 == "Python Programming"){echo 'selected = "selected"';} ?>>Python Programming</option>
								<option value="UI/UX Designing" <?php if($course1 == "UI/UX Designing"){echo 'selected = "selected"';} ?>>UI/UX Designing</option>
								<option value="Graphics Designing" <?php if($course1 == "Graphics Designing"){echo 'selected = "selected"';} ?>>Graphics Designing</option>
							</select>
						</div>
					</div>
					
					<!-- <br> -->
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="m_c2" class="col-sm-4 control-label" style="margin-top: 1%;">Course 2:</label> 
						</p>
						<div class="col-sm-8">
							<select name="c2" id="m_c2" selected="<?php if(isset($_POST['submitbtn'])){ echo $course2; }?>" class="form-control" style="text-align: center;">
								<option></option>
								<option value="Machine Learning" <?php if($course2 == "Machine Learning"){echo 'selected = "selected"';} ?>>Machine Learning</option>
								<option value="MERN Stack" <?php if($course2 == "MERN Stack"){echo 'selected = "selected"';} ?>>MERN Stack</option>
								<option value="AWS Solution Architecture" <?php if($course2 == "AWS Solution Architecture" ){echo 'selected = "selected"';} ?>>AWS Solution Architecture</option>
								<option value="Wordpress Development" <?php if($course2 == "Wordpress Development"){echo 'selected = "selected"';} ?>>Wordpress Development</option>
								<option value="Digital Marketing" <?php if($course2 == "Digital Marketing"){echo 'selected = "selected"';} ?>>Digital Marketing</option>
								<option value="Python Programming" <?php if($course2 == "Python Programming"){echo 'selected = "selected"';} ?>>Python Programming</option>
								<option value="UI/UX Designing" <?php if($course2 == "UI/UX Designing"){echo 'selected = "selected"';} ?> >UI/UX Designing</option>
								<option value="Graphics Designing" <?php if($course2 == "Graphics Designing"){echo 'selected = "selected"';} ?> >Graphics Designing</option>
							</select>
						</div>
					</div>

				</div>

				<!-- <div class="two">
					
					<div class="twoone">
						<p>
							Office use only
						</p>
					</div>

					<div class="twotwo">
						
					</div>

				</div> -->

				
				<div class="coursetype">
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="m_ctype" class="col-sm-6 control-label" style="margin-top: 2%;">Select Course Type: </label>
						</p>
						<div class="col-sm-6">
							<select name="type" id="m_ctype" selected="<?php if(isset($_POST['submitbtn'])){ echo $type; }?>" class="form-control">
								<option></option>
								<option value="Online" <?php if($type == "Online"){echo 'selected = "selected"';} ?>>Online</option>
								<option value="Onsite" <?php if($type == "Onsite"){echo 'selected = "selected"';} ?>>Onsite</option>
							</select>
						</div>
					</div>
				</div>	

				<div class="three">
					<div class="threeone">
						<div class="form-group-one">
							<p class="text-sm-left">
								<label for="m_issuedate" class="col-sm-4 control-label" style="margin-top: 1%;">Issue Date: </label>
							</p>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="issuedate" id="m_issuedate" autosave="on" value="<?php if(isset($_POST['submitbtn'])){ echo $idate; }?>" required>
							</div>
						</div>
					</div>

					<div class="threetwo">
						<div class="form-group-one">
							<p class="text-sm-left">
								<label for="m_duedate" class="col-sm-4 control-label" style="margin-top: 1%;">Due Date: </label>
							</p>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="duedate" id="m_duedate" value="<?php if(isset($_POST['submitbtn'])){ echo $ddate; }?>" required> 
							</div>
						</div>
					</div>
				</div>

				<div class="four">
					<div class="table-responsive-sm fourtwo">
						<table class="table">
							<caption><center><h3 style="color: black;">Fee Voucher</h3></center></caption>
							<thead>
								<tr>
									<th scope="col" style="width: 20%;">
										Sr.No
									</th>
									<th scope="col" style="width: 60%;">
										Course
									</th>
									<th scope="col" style="width: 20%;">
										Amount
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td scope="row"><input type="text" id="m_id1" name="sr1" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $sr; }?>"></td>
									<td><input type="text" id="m_co1" name="co1" style="width: 100%;" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $co; }?>"></td>
									<td><input type="text" id="m_am1" name="am1" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $am; }?>"></td>
								</tr>
								<tr>
									<td scope="row"><input type="text" id="m_id2" name="sr2" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $srr; }?>"></td>
									<td><input type="text" id="m_co2" name="co2" style="width: 100%;" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $col; }?>"></td>
									<td><input type="text" id="m_am2" name="am2" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $amo; }?>"></td>
								</tr>
							</tbody>

						</table>

						<div class="form-group-one fourone">
							<p class="text-sm-left">
								<label for="m_total" class="col-sm-4 control-label" style="margin-top: 1%;">Total: </label>
							</p>
							<div class="col-sm-3" style="margin-left: 2%;">
								<input type="text" class="form-control" name="total" id="m_total" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $fee; }?>" required> 
							</div>
						</div>
					</div>
				</div>

				<div class="five">
					<h4 style="margin-left: 5%;"> Note: </h4>
					<p class="text-justify">
				    	<ol>
					        <li>
					        	Student are request to pay their 
					            callans on time and payments
					            should be made through cash only!
					        </li>
					        <li>
					        	Tuition fee in non-refundable.
					        </li>
					        <li>
					        	Student applied in programs during
				            	fee submission procedures,
				            	will be unable to change course after classes start 
				            </li>
				            <li>
				            	A student can enroll in Maximum 2 
				                courses. 
				            </li>
				            <li>
				            	All fees will be payable in one-time
				                for online students, free will be
				                payable in modules for onsite students. 
				            </li>
				            <li>
				            	Keep your challan copy safe, as
				                you'll not be allowed to sit in class
				                in case you lost it.  
				            </li>
				            <li>
				            	YETP management will decide Campus
				                for student classes, 
				                if any student will get any genuine issue 
				                with their campus they can send application
				                request to YETP Management for any change.
				            </li>
				   	 	</ol>
					</p>
					
				</div>

			</div>

			<div class="col-sm-4 right">

				<div class="head">
					<br>
					<div class="form-group-one">
						<p class="CNo">
							<label for="m_challan" class="col-sm-5 control-label" style="margin-top: 1%;">Challan No: </label>
							<div class="col-sm-14">
								<input type="text" class="form-control" name="challan" id="m_challan" value="<?php if(isset($_POST['submitbtn'])){echo $challan; }?>" readonly> 
							</div>
						</p>
					</div>
				</div>
				<center>
				<div class="logo">
					<!-- logo -->
					<img src="1.jpg" height="130" width="140">
				</div>

				
				<div class="YETP">
					<h2>YETP</h2>
					<p>
						Customer Code: YETP
						<br>
						YOUTH EMPOWERMENT
						<br>
						TRAINING PROGRAM
						<br>
						<h3 style="margin: 0px;">
							STUDENT COPY
						</h3>
					</p>
				</div>

				</center>

				<div class="one">

					<br>
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="r_name" class="col-sm-4 control-label" style="margin-top: 1%;">Name:</label>
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control"  name="name" id = "r_name" value="<?php if(isset($_POST['submitbtn'])){ echo $name; }?>" readonly required>
						</div>
					</div>
					<!-- <br> -->
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="r_roll" class="col-sm-4 control-label" style="margin-top: 1%;">Roll no:</label>
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="roll" id="r_roll" value="<?php if(isset($_POST['submitbtn'])){ echo $roll; }?>" readonly required> 
						</div>
					</div>
					<!-- <br> -->
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="r_c1" class="col-sm-4 control-label" style="margin-top: 1%;">Course 1:</label> 
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="c1" id="r_c1" value="<?php if(isset($_POST['submitbtn'])){ echo $course1; }?>" readonly>
						</div>
					</div>
					<!-- <br> -->
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="r_c2" class="col-sm-4 control-label" style="margin-top: 1%;">Course 1:</label> 
						</p>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="c2" id="r_c2" value="<?php if(isset($_POST['submitbtn'])){ echo $course2; }?>" readonly>
						</div>
					</div>

				</div>

				<!-- <div class="two">
					
					<div class="twoone">
						<p>
							Office use only
						</p>
					</div>

					<div class="twotwo">
						
					</div>

				</div> -->

				<div class="coursetype" style="margin-top: 39%;">
					<div class="form-group-one">
						<p class="text-sm-left">
							<label for="r_ctype" class="col-sm-6 control-label" style="margin-top: 2%;">Select Course Type: </label>
						</p>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="type" id="r_ctype" value="<?php if(isset($_POST['submitbtn'])){ echo $type; }?>" readonly>
						</div>
					</div>
				</div>	

				<div class="three">
					<div class="threeone">
						<div class="form-group-one">
							<p class="text-sm-left">
								<label for="r_issuedate" class="col-sm-4 control-label" style="margin-top: 1%;">Issue Date: </label>
							</p>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="issuedate" id="r_issuedate" autosave="on" value="<?php if(isset($_POST['submitbtn'])){ echo $idate; }?>" readonly required>
							</div>
						</div>
					</div>

					<div class="threetwo">
						<div class="form-group-one">
							<p class="text-sm-left">
								<label for="r_duedate" class="col-sm-4 control-label" style="margin-top: 1%;">Due Date: </label>
							</p>
							<div class="col-sm-8">
								<input type="date" class="form-control" name="duedate" id="r_duedate" value="<?php if(isset($_POST['submitbtn'])){ echo $ddate; }?>" readonly required> 
							</div>
						</div>
					</div>
				</div>

				<div class="four">
					<div class="table-responsive-sm fourtwo">
						<table class="table">
							<caption><center><h3 style="color: black;">Fee Voucher</h3></center></caption>
							<thead>
								<tr>
									<th scope="col" style="width: 20%;">
										Sr.No
									</th>
									<th scope="col" style="width: 60%;">
										Course
									</th>
									<th scope="col" style="width: 20%;">
										Amount
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td scope="row"><input type="text" id="r_id1" name="sr1" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $sr; }?>"></td>
									<td><input type="text" id="r_co1" name="co1" style="width: 100%;" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $co; }?>"></td>
									<td><input type="text" id="r_am1" name="am1" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $am; }?>"></td>
								</tr>
								<tr>
									<td scope="row"><input type="text" id="r_id2" name="sr2" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $srr; }?>"></td>
									<td><input type="text" id="r_co2" name="co2" style="width: 100%;" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $col; }?>"></td>
									<td><input type="text" id="r_am2" name="am2" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $amo; }?>"></td>
								</tr>
							</tbody>

						</table>

						<div class="form-group-one fourone">
							<p class="text-sm-left">
								<label for="r_total" class="col-sm-4 control-label" style="margin-top: 1%;">Total: </label>
							</p>
							<div class="col-sm-3" style="margin-left: 2%;">
								<input type="text" name="total" class="form-control" id="r_total" readonly value="<?php if(isset($_POST['submitbtn'])){ echo $fee; }?>" required> 
							</div>
						</div>
					</div>
				</div>

				<div class="five">
					<h4 style="margin-left: 5%;"> Note: </h4>
					<p>
				    	<ol>
					        <li>
					        	Student are request to pay their 
					            callans on time and payments
					            should be made through cash only!
					        </li>
					        <li>
					        	Tuition fee in non-refundable.
					        </li>
					        <li>
					        	Student applied in programs during
				            	fee submission procedures,
				            	will be unable to change course after classes start 
				            </li>
				            <li>
				            	A student can enroll in Maximum 2 
				                courses. 
				            </li>
				            <li>
				            	All fees will be payable in one-time
				                for online students, free will be
				                payable in modules for onsite students. 
				            </li>
				            <li>
				            	Keep your challan copy safe, as
				                you'll not be allowed to sit in class
				                in case you lost it.  
				            </li>
				            <li>
				            	YETP management will decide Campus
				                for student classes, 
				                if any student will get any genuine issue 
				                with their campus they can send application
				                request to YETP Management for any change.
				            </li>
				   	 	</ol>
					</p>
					
				</div>

			</div>

			<div class="btn1">
				<center>
					<input class="btn-lg btn-block" type="submit" id="generatebtn" value="Generate Challan" name="submitbtn">
				</center>
			</div>

			<div class="btn1">
				<center>
					<input class="btn-lg btn-block" type="button" id="printbtn" value="Print this page" onclick="hidebtn()">
				</center>
			</div>
		</form>

	</body>

	<script type="text/javascript" src="work.js"></script>

</html>
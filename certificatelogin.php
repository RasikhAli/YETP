<?php
 
 session_start();

 if(isset($_POST['Submitbtn']))
 {
 	header("location:CertificatePage.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Certificate Verification</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="7.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CertificatePage/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CertificatePage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CertificatePage/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CertificatePage/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="CertificatePage/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CertificatePage/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CertificatePage/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="CertificatePage/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CertificatePage/css/util.css">
	<link rel="stylesheet" type="text/css" href="CertificatePage/css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(CertificatePage/images/bg-01.jpg);">
					<!-- <span class="login100-form-title-1">
						Certificare Verification
					</span> -->
				</div>

				<div>
					<span class="login100-form-title-1">
						Certificate Verification
					</span>
				
					<form action="" method="post" class="login100-form validate-form">
						<div class="wrap-input100 m-b-26" >
							<span class="label-input100">CNIC</span>
							<input class="input100" type="text" name="CNIC" placeholder="Enter CNIC">
							<span class="focus-input100"></span>
						</div>
	                      
						<hr class="hr-text" data-content="OR">
					
						 
						<!-- <div>

						<hr class="hr-text" data-content="OR">

					    </div> -->
	                    
						<div class="wrap-input100 m-b-18" >
							<span class="label-input100">ROLL NO:</span>
							<input class="input100" type="text" id="Rollnum" name="pass" placeholder="YETP21">
							<span class="focus-input100"></span>
						</div>

						<div class="flex-sb-m w-full p-b-30">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" type="checkbox" id="ckb1" name="remember-me">
								<label class="label-checkbox100" for="ckb1">
									Agree to the terms & Conditions
								</label>
							</div>

							<div>
								<a href="https://www.yetp.pk/apply-now" class="txt1">
									APPLY NOW!
								</a>
							</div>
						</div>

						<div class="container-login100-form-btn">
							<input type="submit" value="Submit" name="Submitbtn" class="login100-form-btn">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="CertificatePage/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="CertificatePage/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="CertificatePage/vendor/bootstrap/js/popper.js"></script>
	<script src="CertificatePage/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="CertificatePage/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="CertificatePage/vendor/daterangepicker/moment.min.js"></script>
	<script src="CertificatePage/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="CertificatePage/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="CertificatePage/js/main.js"></script>

	<script>
		$(document).ready(function()
		{
			$('#Rollnum').focusin(function()
			{
				var rollnum = "YETP21";
				$('#Rollnum').val(rollnum);
			});
		});
	</script>

</body>
</html>
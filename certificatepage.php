<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Print Certificate</title>

		<link rel="stylesheet" type="text/css" href="certificatepage.css">

		<link rel="stylesheet" type="text/css" href="certificatepagealign.css" media="print">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>

	</head>
	<body id="bod">

		<div class="Certificate">
			
			<center>

				<div class="img">

					<!-- <img src="Certificate.png"> -->
					<div class="InpName">
						<input type="text" id="name" value="RASIKH ALI" readonly>
					</div>

					<div class="InpCourse">
						<input type="text" id="course" value="(Graphics Designing)" readonly>
					</div>

				</div>


				<div class="btn">
					<center>
						<input type="button" id="printbtn" value="Print Certificate" onclick="hidebtn()">
					</center>
				</div>
				
			</center>


		</div>

	</body>


	<script>
		function printpage()
		{
		 	window.print();

			showbtn(); 
		}

		function showbtn()
		{
			var button1 = document.getElementById("printbtn");
			button1.style.display = 'block'; 
		}

		function hidebtn() 
		{
			var button1 = document.getElementById("printbtn");
			button1.style.display = 'none'; 

			printpage();
		} 

	</script>

</html>
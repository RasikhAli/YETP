$(document).ready(function()
{
	var onsite = 5500;
	var online = 2750;
	// var ctype  = "";

	$('#ChallanForm').submit(function(){
		challanno = "YETP-";
		$('#m_challan').val(challanno);
  		$('#l_challan').val(challanno);
  		$('#r_challan').val(challanno);
	});

	$('#m_name').focusout(function()
	{
		var name = $('#m_name').val();
  		$('#l_name').val(name);
  		$('#r_name').val(name);
	});

	$('#m_roll').focusin(function() 
	{
		// roll = "YETP-21-";
		roll = "YETP21";
		$('#m_roll').val(roll);
  		$('#l_roll').val(roll);
  		$('#r_roll').val(roll);
	});

	$('#m_roll').focusout(function() 
	{
		roll = $('#m_roll').val();
  		$('#l_roll').val(roll);
  		$('#r_roll').val(roll);
	});

	$('#m_c1').focusout(function() 
	{
		c1 = $('#m_c1').val();
  		if(c1 != "")
  		{
  			$('#l_c1').val(c1);
			$('#r_c1').val(c1);

			$('#l_id1').val(1);
			$('#m_id1').val(1);
			$('#r_id1').val(1);

			$('#l_co1').val(c1);
			$('#m_co1').val(c1);
			$('#r_co1').val(c1);


			
			$('#l_am1').val(onsite);
			$('#m_am1').val(onsite);
			$('#r_am1').val(onsite);

	  		if($('#m_co2').val() != "")
			{
				$('#l_total').val(onsite+onsite);
		  		$('#m_total').val(onsite+onsite);
		  		$('#r_total').val(onsite+onsite);
			}
			else
			{
				$('#l_total').val(onsite);
		  		$('#m_total').val(onsite);
		  		$('#r_total').val(onsite);
			}
		}
  		else
  		{

  			$('#l_c1').val("");
			$('#r_c1').val("");

			$('#l_id1').val("");
			$('#m_id1').val("");
			$('#r_id1').val("");

			$('#l_co1').val("");
			$('#m_co1').val("");
			$('#r_co1').val("");

			$('#l_am1').val("");
			$('#m_am1').val("");
			$('#r_am1').val("");

			if($('#l_am1').val() == "" && $('#l_am2').val() == "")
			{
				$('#l_total').val("");
		  		$('#m_total').val("");
		  		$('#r_total').val("");
			}
			else
			{
				$('#l_total').val(onsite);
		  		$('#m_total').val(onsite);
		  		$('#r_total').val(onsite);
			}
  		}
  		
	});

	$('#m_c2').focusout(function() 
	{
		c2 = $('#m_c2').val();
		if(c2 != "")
  		{
	  		$('#l_c2').val(c2);
	  		$('#r_c2').val(c2);


	  		$('#l_id2').val(2);
	  		$('#m_id2').val(2);
	  		$('#r_id2').val(2);

	  		$('#l_co2').val(c2);
	  		$('#m_co2').val(c2);
	  		$('#r_co2').val(c2);

	  		$('#l_am2').val(onsite);
	  		$('#m_am2').val(onsite);
	  		$('#r_am2').val(onsite);

	  		if($('#m_co1').val() != "")
			{
				$('#l_total').val(onsite + onsite);
		  		$('#m_total').val(onsite + onsite);
		  		$('#r_total').val(onsite + onsite);
			}
			else
			{
				$('#l_total').val(onsite);
		  		$('#m_total').val(onsite);
		  		$('#r_total').val(onsite);
			}
		}
		else
  		{

  			$('#l_c2').val("");
			$('#r_c2').val("");

			$('#l_id2').val("");
			$('#m_id2').val("");
			$('#r_id2').val("");

			$('#l_co2').val("");
			$('#m_co2').val("");
			$('#r_co2').val("");

			$('#l_am2').val("");
			$('#m_am2').val("");
			$('#r_am2').val("");

			if($('#l_am1').val() == "" && $('#l_am2').val() == "")
			{
				$('#l_total').val("");
		  		$('#m_total').val("");
		  		$('#r_total').val("");
			}
			else
			{
				$('#l_total').val(onsite);
		  		$('#m_total').val(onsite);
		  		$('#r_total').val(onsite);
			}
  		}

	});

	$('#m_ctype').focusout(function()
	{
		ctype = $('#m_ctype').val();
		$('#l_ctype').val(ctype);
		$('#r_ctype').val(ctype);

		if(ctype == "Online")
		{
			if(c1 != "")
  			{
				$('#l_am1').val(online);
				$('#m_am1').val(online);
				$('#r_am1').val(online);

		  		if($('#m_co2').val() != "")
				{
					$('#l_total').val(online+online);
			  		$('#m_total').val(online+online);
			  		$('#r_total').val(online+online);
				}
				else
				{
					$('#l_total').val(online);
			  		$('#m_total').val(online);
			  		$('#r_total').val(online);
				}
			}
			else
			{
				if($('#l_am1').val() == "" && $('#l_am2').val() == "")
				{
					$('#l_total').val(0);
			  		$('#m_total').val(0);
			  		$('#r_total').val(0);
				}
				else
				{
					$('#l_total').val(online);
			  		$('#m_total').val(online);
			  		$('#r_total').val(online);
				}
			}

			if(c2 != "")
  			{
				$('#l_am2').val(online);
		  		$('#m_am2').val(online);
		  		$('#r_am2').val(online);

		  		if($('#m_co1').val() != "")
				{
					$('#l_total').val(online + online);
			  		$('#m_total').val(online + online);
			  		$('#r_total').val(online + online);
				}
				else
				{
					$('#l_total').val(online);
			  		$('#m_total').val(online);
			  		$('#r_total').val(online);
				}
			}
			else
			{
				if($('#l_am1').val() == "" && $('#l_am2').val() == "")
				{
					$('#l_total').val(0);
			  		$('#m_total').val(0);
			  		$('#r_total').val(0);
				}
				else
				{
					$('#l_total').val(online);
			  		$('#m_total').val(online);
			  		$('#r_total').val(online);
				}
			}
		}
		else if(ctype == "Onsite")
		{
			if(c1 != "")
	  		{
				$('#l_am1').val(onsite);
				$('#m_am1').val(onsite);
				$('#r_am1').val(onsite);

		  		if($('#m_co2').val() != "")
				{
					$('#l_total').val(onsite+onsite);
			  		$('#m_total').val(onsite+onsite);
			  		$('#r_total').val(onsite+onsite);
				}
				else
				{
					$('#l_total').val(onsite);
			  		$('#m_total').val(onsite);
			  		$('#r_total').val(onsite);
				}
			}
	  		else
	  		{
				if($('#l_am1').val() == "" && $('#l_am2').val() == "")
				{
					$('#l_total').val(0);
			  		$('#m_total').val(0);
			  		$('#r_total').val(0);
				}
				else
				{
					$('#l_total').val(onsite);
			  		$('#m_total').val(onsite);
			  		$('#r_total').val(onsite);
				}
	  		}
	  		
			if(c2 != "")
	  		{
		  		$('#l_am2').val(onsite);
		  		$('#m_am2').val(onsite);
		  		$('#r_am2').val(onsite);

		  		if($('#m_co1').val() != "")
				{
					$('#l_total').val(onsite + onsite);
			  		$('#m_total').val(onsite + onsite);
			  		$('#r_total').val(onsite + onsite);
				}
				else
				{
					$('#l_total').val(onsite);
			  		$('#m_total').val(onsite);
			  		$('#r_total').val(onsite);
				}
			}
			else
	  		{
				if($('#l_am1').val() == "" && $('#l_am2').val() == "")
				{
					$('#l_total').val(0);
			  		$('#m_total').val(0);
			  		$('#r_total').val(0);
				}
				else
				{
					$('#l_total').val(onsite);
			  		$('#m_total').val(onsite);
			  		$('#r_total').val(onsite);
				}
	  		}
		}

	});

	$('#m_issuedate').hover(function() 
	{
		var id = new Date();
		idate = id.toISOString().substr(0, 10);
  		$('#l_issuedate').val(idate);
  		$('#r_issuedate').val(idate);
  		$('#m_issuedate').val(idate);
	});

	$('#m_issuedate').focusout(function() 
	{
		idate = $('#m_issuedate').val();
  		$('#l_issuedate').val(idate);
  		$('#r_issuedate').val(idate);
	});

	$('#m_duedate').hover(function() 
	{
		var x = new Date();
		ddate = x.toISOString().substr(0, 10);
  		$('#l_duedate').val(ddate);
  		$('#r_duedate').val(ddate);
  		$('#m_duedate').val(ddate);
	});

	$('#m_duedate').focusout(function() 
	{
		ddate = $('#m_duedate').val();
  		$('#l_duedate').val(ddate);
  		$('#r_duedate').val(ddate);
	});

});

function printpage()
{
	// window.print();

	// var prinContents = document.getElementById('ChallanForm').innerHTML;
 	// var origContents = document.body.innerHTML;

 	// document.body.innerHTML = prinContents;
 	window.print();
 	// document.body.innerHTML = origContents;

	showbtn(); 

}
function showbtn()
{
	var button1 = document.getElementById("printbtn");
	var button2 = document.getElementById("generatebtn");
	button1.style.display = 'block'; 
	button2.style.display = 'block';

}
function hidebtn() 
{
	var button1 = document.getElementById("printbtn");
	var button2 = document.getElementById("generatebtn");
	button1.style.display = 'none'; 
	button2.style.display = 'none';

	// button1.style.visibility = 'visible';
	// button2.style.visibility = 'visible';

	printpage();
} 
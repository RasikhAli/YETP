<?php
	
	$conn = mysqli_connect('localhost', 'root', '');
	if(!$conn)
	{
		echo 'Some Problem Occured while connecting to the Server';
	}

	$db = mysqli_select_db($conn, 'test4');
	if(!$db)
	{
		echo 'Some Problem Occured while connecting to the Database';
	}

?>
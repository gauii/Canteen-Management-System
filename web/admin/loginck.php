<?php session_start();
	include "connect.php";
	$aid = $_POST['aid'];
	$pass = $_POST['pass'];

	$sql = mysqli_query($con,"select * from staff where staff_id='$aid' and s_phone='$pass'");
	if(mysqli_fetch_array($sql))
	{
		$_SESSION['aid'] = $aid;
		header("location:after_login.php");
	}
	else
	{
		echo "<center><span style='color:red; font-size:2.3em; font-weight:bold;'>Please Enter Valid AdminID and Password</span></center>";
		include "aindex.php";
	}
?>
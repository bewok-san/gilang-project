<?php 
	
	session_start();
	include 'config.php';
	$sess_admin = $_SESSION['id'];
	if (isset($sess_admin))
	{
		session_destroy();
		echo '<script>alert("Logout success!");
		window.location.href="login.php"</script>';
	}
	
	
	
?>
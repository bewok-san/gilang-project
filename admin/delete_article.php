<?php
	include 'config.php';	
	
	$id = $_GET['id'];
	$gambar = $_GET['gambar'];
	
	$filename = "assets/gambar/artikel/".$gambar;
	if(file_exists($filename)){
		unlink($filename);
	}
	
	$query = mysqli_query($connect, "DELETE FROM artikel where id='$id'");
	if($query){
		echo "<script>alert('Delete Success!');
		window.location.href='artikel.php';
		</script>";
	} 
?>
<?php
	include 'config.php';	
	
	$id = $_GET['id'];
	$gambar = $_GET['gambar'];
	
	$filename = "assets/gambar/profil/".$gambar;
	if(file_exists($filename)){
		unlink($filename);
	}
	
	$query = mysqli_query($connect, "DELETE FROM profil_umkm where id='$id'");
	if($query){
		echo "<script>alert('Delete Success!');
		window.location.href='profil.php';
		</script>";
	} 
?>
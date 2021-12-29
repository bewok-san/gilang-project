<?php
	include 'config.php';	
	if($_POST) {
		$judul = $_POST['judul'];
		$tanggal = $_POST['tanggal'];
		$deskripsi = $_POST['deskripsi'];
		
		$filename = $_FILES["gambar"]["name"];
		$tempname = $_FILES["gambar"]["tmp_name"];
		$newfilename = round(microtime(true)).$filename;
		$folder = "assets/gambar/artikel/".$newfilename;
		
		$query = mysqli_query($connect, "INSERT INTO artikel (judul,tanggal,deskripsi,gambar) VALUES ('$judul', '$tanggal', '$deskripsi', '$newfilename')");
		
		if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
			}else{
            $msg = "Failed to upload image";
			echo $msg;
		}
		
		if($query){
			echo "<script>alert('Input Success!');
			window.location.href='artikel.php';
			</script>";
		} 
	}
?>
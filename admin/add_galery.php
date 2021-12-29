<?php
	include 'config.php';	
	if($_POST) {
		$deskripsi = $_POST['deskripsi'];
		$filename = $_FILES["gambar"]["name"];
		$tempname = $_FILES["gambar"]["tmp_name"];
		$newfilename = round(microtime(true)).$filename;
		$folder = "assets/gambar/galeri/".$newfilename;
		
		$query = mysqli_query($connect, "INSERT INTO galeri (gambar,deskripsi) VALUES ('$newfilename', '$deskripsi')");
		
		if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
			}else{
            $msg = "Failed to upload image";
			echo $msg;
		}
		
		if($query){
			echo "<script>alert('Input Success!');
			window.location.href='galeri.php';
			</script>";
		} 
	}
	?>	
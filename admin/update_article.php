<?php
	include 'config.php';	
	if($_POST) {
		$id = $_POST['id'];
		$judul = $_POST['judul'];
		$tanggal = $_POST['tanggal'];
		$deskripsi = $_POST['deskripsi'];
		$gambar = $_POST['gambar'];
		
		if(empty($_FILES['gambar2']['name'])){
			$query = mysqli_query($connect, "UPDATE artikel SET judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi', gambar='$gambar' WHERE id='$id'");
			} else {
			$filename = $_FILES["gambar2"]["name"];
			$tempname = $_FILES["gambar2"]["tmp_name"];
			$newfilename = round(microtime(true)).$filename;
			$folder = "assets/gambar/artikel/".$newfilename;
			
			$query = mysqli_query($connect, "UPDATE artikel SET judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi', gambar='$newfilename' WHERE id='$id'");
			
			$fileold = "assets/gambar/artikel/".$gambar;
			if(file_exists($fileold)){
				unlink($fileold);
			}
			
			if (move_uploaded_file($tempname, $folder))  {
				$msg = "Image uploaded successfully";
				}else{
				$msg = "Failed to upload image";
				echo $msg;
			}
		}
		
		
		
		if($query){
			echo "<script>alert('Update Success!');
			window.location.href='artikel.php';
			</script>";
		} 
	}
?>
<?php
	include 'config.php';	
	if($_POST) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$owner = $_POST['owner'];
		$provinsi = $_POST['provinsi'];
		$kota = $_POST['kota'];
		$deskripsi = $_POST['deskripsi'];
		$gambar = $_POST['gambar'];
		
		if(empty($_FILES['gambar2']['name'])){
			$query = mysqli_query($connect, "UPDATE profil_umkm SET nama='$nama', owner='$owner', 
			provinsi='$provinsi', kota='$kota', deskripsi='$deskripsi', gambar='$gambar' WHERE id='$id'");
			} else {
			$filename = $_FILES["gambar2"]["name"];
			$tempname = $_FILES["gambar2"]["tmp_name"];
			$newfilename = round(microtime(true)).$filename;
			$folder = "assets/gambar/profil/".$newfilename;
			
			$query = mysqli_query($connect, "UPDATE profil_umkm SET nama='$nama', owner='$owner', 
			provinsi='$provinsi', kota='$kota', deskripsi='$deskripsi', gambar='$newfilename' WHERE id='$id'");
			
			$fileold = "assets/gambar/profil/".$gambar;
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
			window.location.href='profil.php';
			</script>";
		} 
	}
?>
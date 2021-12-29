<?php
	include 'config.php';	
	if($_POST) {
		$nama = $_POST['nama'];
		$owner = $_POST['owner'];
		$provinsi = $_POST['provinsi'];
		$kota = $_POST['kota'];
		$deskripsi = $_POST['deskripsi'];
		
		$filename = $_FILES["gambar"]["name"];
		$tempname = $_FILES["gambar"]["tmp_name"];
		$newfilename = round(microtime(true)).$filename;
		$folder = "assets/gambar/profil/".$newfilename;
		
		$query = mysqli_query($connect, "INSERT INTO profil_umkm (nama,owner,provinsi,kota,deskripsi,gambar) VALUES ('$nama', '$owner', '$provinsi', '$kota', '$deskripsi', '$newfilename')");
		
		if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
			}else{
            $msg = "Failed to upload image";
			echo $msg;
		}
		
		if($query){
			echo "<script>alert('Input Success!');
			window.location.href='profil.php';
			</script>";
		} 
	}
?>
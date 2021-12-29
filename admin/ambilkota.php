<?php
	include 'config.php';
	
	$provinsi = $_GET['provinsi'];
	$kota = mysqli_query($connect, "SELECT * FROM regencies WHERE province_id='$provinsi'");
	echo "<option>-- Pilih Kabupaten/Kota --</option>";
	while($k = mysqli_fetch_array($kota)){
		echo "<option value=".$k['id'].">".$k['name']."</option>";
	}
?>
<?php
	include	'header.php';
	
?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Profil - Tambah Data</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="profil.php">Profil</a></li>
				<li class="breadcrumb-item active">Tambah Data</li>
			</ol>
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					Tambah Data Profil
				</div>
				<div class="card-body mx-4 my-4">
					<form method="post" action="add_profile.php" enctype="multipart/form-data">
						<div class="form-floating mb-3">
							<input class="form-control" id="nama" name="nama" type="text" placeholder="Nama UMKM" required/>
							<label for="nama">Nama UMKM</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="owner" name="owner" type="text" placeholder="Nama Owner" required/>
							<label for="owner">Nama Owner</label>
						</div>
						<!-- Fetching data from db -->
						<?php
							include "config.php";
							$query_provinces = mysqli_query($connect, "select * from provinces");
						?>
						<div class="row mb-3">
							<div class="col-md-6">
								<div class="form-floating mb-3 mb-md-0">
									<select class="form-select" name="provinsi" id="provinsi" placeholder="Provinsi" required>
										<option selected>-- Pilih Provinsi --</option>
										<?php
											while ($row_provinces = mysqli_fetch_array($query_provinces)){
												echo "<option value=".$row_provinces['id'].">".$row_provinces['name']."</option>";
											}
										?>
									</select>
									<label for="provinsi">Provinsi</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating">
									<select class="form-select" name="kota" id="kota" placeholder="Kota" required>
									</select>
									<label for="kota">Kota</label>
								</div>
							</div>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="deskripsi" name="deskripsi" type="text" placeholder="Deskripsi Singkat" required/>
							<label for="deskripsi">Deskripsi Singkat</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control-file" id="gambar" type="file" name="gambar" accept="image/png, image/jpeg" required/>
						</div>
						<div class="mt-4 mb-0">
							<div class="d-grid"><button type="submit" name="submit" class="btn btn-primary btn-block">Tambah</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
	
	<script type="text/javascript">
		$(document).ready(function(){
			//apabila terjadi event onchange terhadap object <select id=provinsi>
			$("#provinsi").change(function(){
				var provinsi = $("#provinsi").val();
				$.ajax({
					url: "ambilkota.php",
					data: "provinsi="+provinsi,
					cache: false,
					success: function(msg){
						//jika data sukses diambil dari server kita tampilkan
						//di <select id=kota>
						$("#kota").html(msg);
					}
				});
			});
		});
	</script>

<?php
include 'footer.php';	
?>		
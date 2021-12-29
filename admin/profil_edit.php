<?php
	include	'header.php';
	
?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Profil - Edit Data</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="profil.php">Profil</a></li>
				<li class="breadcrumb-item active">Edit Data</li>
			</ol>
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					Edit Data Profil
				</div>
				<div class="card-body mx-4 my-4">
					<?php
						include 'config.php';
						$id = $_GET['id'];
						$query = mysqli_query($connect, "SELECT * FROM profil_umkm where id = '$id'");
						$row = mysqli_fetch_array($query);
					?>
					<form method="post" action="update_profile.php" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
						<input type="hidden" name="gambar" value="<?php echo $row['gambar'] ?>">
						<div class="form-floating mb-3">
							<input class="form-control" id="nama" name="nama" type="text" placeholder="Nama UMKM" value="<?php echo $row['nama'] ?>" required/>
							<label for="nama">Nama UMKM</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" id="owner" name="owner" type="text" placeholder="Nama Owner" value="<?php echo $row['owner'] ?>" required/>
							<label for="owner">Nama Owner</label>
						</div>
						<!-- Fetching data from db -->
						<?php
							$query_provinces = mysqli_query($connect, "select * from provinces");
						?>
						<div class="row mb-3">
							<div class="col-md-6">
								<div class="form-floating mb-3 mb-md-0">
									<select class="form-select" name="provinsi" id="provinsi" placeholder="Provinsi" required>
										<option>-- Pilih Provinsi --</option>
										<?php
											while ($row_provinces = mysqli_fetch_array($query_provinces)){
											?>
											<option value="<?php echo $row_provinces['id']; ?>" <?php if ($row_provinces['id'] == $row['provinsi']): ?> selected="selected"<?php endif; ?>><?php echo $row_provinces['name']; ?></option>
											<?php
											}
										?>
									</select>
									<label for="provinsi">Provinsi</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating">
									<select class="form-select" name="kota" id="kota" placeholder="Kota" required>
										<?php
											$query_kota = mysqli_query($connect, "select * from regencies where province_id='".$row['provinsi']."'");
											while($row_kota = mysqli_fetch_array($query_kota)){
											?>
											<option value="<?php echo $row_kota['id']; ?>" <?php if ($row_kota['id'] == $row['kota']): ?> selected="selected"<?php endif; ?>><?php echo $row_kota['name']; ?></option>
											<?php
											}
										?>
									</select>
									<label for="kota">Kota</label>
								</div>
							</div>
						</div>
					<div class="form-floating mb-3">
					<input class="form-control" id="deskripsi" name="deskripsi" type="text" value="<?php echo $row['deskripsi']; ?>" placeholder="Deskripsi Singkat" required/>
					<label for="deskripsi">Deskripsi Singkat</label>
					</div>
					<div class="form-floating mb-3">
					<input class="form-control-file" id="gambar" type="file" name="gambar2" accept="image/png, image/jpeg"/>
					</div>
					<div class="mt-4 mb-0">
					<div class="d-grid"><button type="submit" name="submit" class="btn btn-primary btn-block">Update</button></div>
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
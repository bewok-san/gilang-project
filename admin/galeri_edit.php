<?php
	include 'header.php';	
?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Galeri - Edit Data</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="galeri.php">Galeri</a></li>
				<li class="breadcrumb-item active">Edit Data</li>
			</ol>
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					Edit Data Galeri
				</div>
				<div class="card-body mx-4 my-4">
					<?php
						include 'config.php';
						$id = $_GET['id'];
						$query = mysqli_query($connect, "SELECT * FROM galeri where id = '$id'");
						$row = mysqli_fetch_array($query);
					?>
					<form method="post" action="update_gallery.php" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>">
						<div class="form-floating mb-3">
							<input class="form-control" id="deskripsi" name="deskripsi" type="text" placeholder="Deskripsi" value="<?php echo $row['deskripsi']; ?>" required/>
							<label for="deskripsi">Deskripsi</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control-file" id="gambar" type="file" name="gambar2" accept="image/png, image/jpeg" placeholder="Gambar"/>
						</div>
						<div class="mt-4 mb-0">
							<div class="d-grid"><button type="submit" name="submit" class="btn btn-primary btn-block">Update</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
	<?php
		include 'footer.php';	
	?>

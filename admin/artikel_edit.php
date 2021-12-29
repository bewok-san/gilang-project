<?php
	include 'header.php';	
?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Artikel - Edit Data</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="artikel.php">Artikel</a></li>
				<li class="breadcrumb-item active">Edit Data</li>
			</ol>
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					Edit Data Artikel
				</div>
				<div class="card-body mx-4 my-4">
					<form method="post" action="update_article.php" enctype="multipart/form-data">
						<?php
							include 'config.php';
							$id = $_GET['id'];
							$query = mysqli_query($connect, "SELECT * FROM artikel where id = '$id'");
							$row = mysqli_fetch_array($query);
							?>
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
						<input type="hidden" name="gambar" value="<?php echo $row['gambar'] ?>">
						<div class="row mb-3">
							<div class="col-md-6">
								<div class="form-floating mb-3 mb-md-0">
									<input class="form-control" id="judul" name="judul" type="text" placeholder="Judul" value="<?php echo $row['judul'] ?>" required/>
									<label for="judul">Judul</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating">
									<input class="form-control" id="tanggal" name="tanggal" type="text" placeholder="Tanggal" value="<?php echo $row['tanggal'] ?>" required/>
									<label for="tanggal">Tanggal</label>
								</div>
							</div>
						</div>
						<div class="form-floating mb-3">
							<textarea id="deskripsi" name="deskripsi" type="text" placeholder="Deskripsi" required><?php echo $row['deskripsi'] ?></textarea>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control-file" id="gambar" type="file" name="gambar2" accept="image/png, image/jpeg" />
						</div>
						<div class="mt-4 mb-0">
							<div class="d-grid"><button type="submit" name="submit" class="btn btn-primary btn-block">Tambah</button></div>
						</div>
					</form>
					</div>
					</div>
					</div>
					</main>
					<script>
					CKEDITOR.replace( 'deskripsi' );
					</script>
					<script type="text/javascript">
					$(document).ready(function () {
					$('#tanggal').datepicker({
					format: 'dd/mm/yyyy',
					startDate: 'now'
					});
					});
					</script>
					<?php
					include 'footer.php';	
					?>
										
<?php
	include 'header.php';	
?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Artikel - Tambah Data</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="artikel.php">Artikel</a></li>
				<li class="breadcrumb-item active">Tambah Data</li>
			</ol>
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					Tambah Data Artikel
				</div>
				<div class="card-body mx-4 my-4">
					<form method="post" action="add_article.php" enctype="multipart/form-data">
						<div class="row mb-3">
							<div class="col-md-6">
								<div class="form-floating mb-3 mb-md-0">
									<input class="form-control" id="judul" name="judul" type="text" placeholder="Judul" required/>
									<label for="judul">Judul</label>
									</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating">
									<input class="form-control" id="tanggal" name="tanggal" type="text" placeholder="Tanggal" required/>
									<label for="tanggal">Tanggal</label>
								</div>
							</div>
						</div>
						<div class="form-floating mb-3">
							<textarea id="deskripsi" name="deskripsi" type="text" placeholder="Deskripsi" required></textarea>
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

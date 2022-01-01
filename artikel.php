<?php
	$title = "Artikel";
	include 'header.php';
	include 'admin/config.php';
?>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-main">
		<div class="container px-5">
			<a class="navbar-brand" href="index.php">Artikel</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
					<li class="nav-item"><a class="nav-link active"  aria-current="page" href="artikel.php">Artikel</a></li>
					<li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Page Content-->
	<div class="container px-4 px-lg-4">
		<div class="d-flex justify-content-center"><h4 class="align my-4">Artikel</h4></div>
		<?php
			$query2 = mysqli_query($connect, "SELECT * FROM artikel LIMIT 3");
			while($row2 = mysqli_fetch_array($query2)) {
			?>
			<div class="row gx-3 gx-lg-4">
				<div class="mb-4 justify-content-center">
					<div class="card border-light">
						<div class="row no-gutters">
							<div class="col-md-5">
								<img src="admin/assets/gambar/artikel/<?php echo $row2['gambar']; ?>" class="card-img-top h-100" width="600" height="300" alt="...">
							</div>
							<div class="col-md-7">
								<div class="card-body">
									<h5 class="card-title"><?php echo $row2['judul']; ?></h5>
									<p class="card-text"><small class="text-muted"><?php echo $row2['tanggal']; ?></small></p>
									<p class="card-text" style="overflow:hidden; white-space:nowrap; text-overflow:ellipsis;"><?php echo $row2['deskripsi']; ?></p>
									<a href="artikel_detail.php?id=<?php echo $row2['id']; ?>" class="btn btn-primary stretched-link">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
		?>
	</div>
	<?php
		include 'footer.php';
	?>

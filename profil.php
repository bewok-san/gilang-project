<?php
	$title = "Profil";
	include 'header.php';
	include 'admin/config.php';
?>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-main">
		<div class="container px-5">
			<a class="navbar-brand" href="index.php">Profil UMKM</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="profil.php">Profil</a></li>
					<li class="nav-item"><a class="nav-link" href="artikel.php">Artikel</a></li>
					<li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Page Content-->
	<div class="container-fluid bg-white">
		<div class="d-flex justify-content-center"><h4 class="my-5">Profil UMKM</h4></div>
		<div class="row gx-3 gx-lg-4">
			<?php
				$query = mysqli_query($connect, "SELECT * FROM profil_umkm");
				while($row = mysqli_fetch_array($query)) {
				?>
				<div class="col-md-4 mb-5 justify-content-center">
					<div class="d-flex justify-content-center">
						<a href="profil_detail.php?id=<?php echo $row['id']; ?>"><img class="img-fluid rounded mb-4 mb-lg-0" src="admin/assets/gambar/profil/<?php echo $row['gambar']; ?>" width="300" height="300"/></a>
					</div>
				</div>
				<?php
				}
			?>
		</div>
	</div>
	<?php
		include 'footer.php';
	?>

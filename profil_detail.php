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
	<div class="container mt-5">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-8">
				<?php
					$id = $_GET['id'];
					$query = mysqli_query($connect, "SELECT * FROM profil_umkm WHERE id = '$id' ");
					$row = mysqli_fetch_array($query);
				?>
				<article>
					<figure class="mb-4 d-flex justify-content-center">
						<img src="admin/assets/gambar/profil/<?php echo $row['gambar']; ?>" class="img-fluid rounded" alt="..." width="300" height="300">
					</figure>
					<header class="mb-5 text-center">
						<h1 class="fw-bolder mb-1"><?php echo $row['nama']; ?></h1>
						<h3 class="fw-bolder mb-1"><?php echo $row['owner']; ?></h3>
						<?php 
							$provinsi_q = mysqli_query($connect, "SELECT name FROM provinces where id='".$row['provinsi']."'");	
							$provinsi = mysqli_fetch_array($provinsi_q);
							$kota_q = mysqli_query($connect, "SELECT name FROM regencies where id='".$row['kota']."'");	
							$kota = mysqli_fetch_array($kota_q);
						?>
						<h3 class="fw-bolder mb-1"><?php echo $kota['name'].', '.$provinsi['name']; ?></h3>
					</header>
					<section class="mb-5">
						<p><?php echo $row['deskripsi']; ?></p>
					</section>
					
				</article>
			</div>
			
		</div>
	</div>
	<?php
		include 'footer.php';
		?>
		
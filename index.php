<?php
	$title = "Beranda";
	include 'header.php';
	include 'admin/config.php';
?>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-main">
		<div class="container px-5">
			<a class="navbar-brand" href="index">Profil UMKM</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
					<li class="nav-item"><a class="nav-link" href="artikel.php">Artikel</a></li>
					<li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Page Content-->
	<div class="container px-4 px-lg-5">
		<!-- Heading Row-->
		<div class="row gx-4 gx-lg-5 align-items-center my-5">
			<div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
			<div class="col-lg-5">
				<h1 class="font-weight-light">Business Name</h1>
				<p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
				<a class="btn btn-primary" href="#!">Gabung!</a>
			</div>
		</div>
	</div>
	
	<!-- Profile -->
	<div class="container-fluid bg-sub">
		<div class="d-flex justify-content-center"><h4 class="text-white my-5">Profil UMKM</h4></div>
		<div class="row gx-3 gx-lg-4">
			<?php
				$query = mysqli_query($connect, "SELECT * FROM profil_umkm LIMIT 3");
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
	
	<!-- Artikel -->
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
	
	
	<!-- Gallery -->
	<div class="container-fluid bg-sub">
		<div class="d-flex justify-content-center"><h4 class="text-white my-5">Galeri</h4></div>
		<div class="row gx-3 gx-lg-4">
			<?php
				$query3 = mysqli_query($connect, "SELECT * FROM galeri LIMIT 4");
				while($row3 = mysqli_fetch_array($query3)) {
				?>
				<div class="col-md-3 mb-5 justify-content-center">
					<div class="d-flex justify-content-center">
						<a href="galeri.php"><img class="img-fluid rounded mb-4 mb-lg-0" src="admin/assets/gambar/galeri/<?php echo $row3['gambar']; ?>" alt="<?php echo $row3['deskripsi']; ?>" width="300" height="200" /></a>
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
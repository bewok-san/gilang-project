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
		<div class="container mt-5">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
				<?php
				$id = $_GET['id'];
				$query = mysqli_query($connect, "SELECT * FROM artikel WHERE id = '$id'");
				$row = mysqli_fetch_array($query);
				?>
					<article>
						<header class="mb-5">
							<h1 class="fw-bolder mb-1"><?php echo $row['judul']; ?></h1>
							<div class="text-muted fst-italic mb-2"><?php echo $row['tanggal']; ?></div>
						</header>
						<figure class="mb-4 d-flex justify-content-center">
							<img src="admin/assets/gambar/artikel/<?php echo $row['gambar']; ?>" class="img-fluid rounded" alt="..." width="600" height="300">
						</figure>
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

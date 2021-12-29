<?php
	include 'header.php';	
?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Galeri</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Galeri</li>
			</ol>
			<a href="galeri_tambah.php" class="btn btn-dark my-1"><i class="fas fa-plus mx-1"></i>Tambah</a>
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					Data Galeri
				</div>
				<div class="card-body">
					<table id="datatablesSimple">
						<thead>
							<tr>
								<th>No</th>
								<th>Gambar</th>
								<th>Deskripsi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Gambar</th>
								<th>Deskripsi</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>
							<?php
								include 'config.php';
								$no = 0;
								$query = mysqli_query($connect, "SELECT * FROM galeri");
								while($row = mysqli_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $no+1; ?></td>
									<td><img src="assets/gambar/galeri/<?php echo $row['gambar']; ?>" width="100" height="80"></td>
									<td><?php echo $row['deskripsi']; ?></td>
									<td><a href="galeri_edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary my-1">Edit</a><br><a onclick="return confirm('Are you sure want to delete?')" href="delete_gallery.php?id=<?php echo $row['id'];?>&gambar=<?php echo $row['gambar'];?>" class="btn btn-danger my-1">Delete</a></td>
								</tr>
								<?php
									$no++;
								}
								?>
								
								</tbody>
								</table>
								</div>
								</div>
								</div>
								</main>
								<?php
								include 'footer.php';	
								?>
																
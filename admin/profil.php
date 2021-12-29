<?php
	include 'header.php';
?>


<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Profil</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Profil</li>
			</ol>
			<a href="profil_tambah.php" class="btn btn-dark my-1"><i class="fas fa-plus mx-1"></i>Tambah</a>
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					Data Profil
				</div>
				<div class="card-body">
					<table id="datatablesSimple">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama UMKM</th>
								<th>Owner</th>
								<th>Lokasi</th>
								<th>Deskripsi singkat</th>
								<th>Gambar</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Nama UMKM</th>
								<th>Owner</th>
								<th>Lokasi</th>
								<th>Deskripsi singkat</th>
								<th>Gambar</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>
							<?php
								include 'config.php';
								$no = 0;
								$query = mysqli_query($connect, "SELECT * FROM profil_umkm");
								while($row = mysqli_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $no+1; ?></td>
									<td><?php echo $row['nama']; ?></td>
									<td><?php echo $row['owner']; ?></td>
									<?php 
										$provinsi_q = mysqli_query($connect, "SELECT name FROM provinces where id='".$row['provinsi']."'");	
										$provinsi = mysqli_fetch_array($provinsi_q);
										$kota_q = mysqli_query($connect, "SELECT name FROM regencies where id='".$row['kota']."'");	
										$kota = mysqli_fetch_array($kota_q);
									?>
									<td><?php echo $kota['name'].', '.$provinsi['name']; ?></td>
									
									<td><?php echo $row['deskripsi']; ?></td>
									<td><img src="assets/gambar/profil/<?php echo $row['gambar']; ?>" width="100" height="100"></td>
									<td><a href="profil_edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary my-1">Edit</a><br><a onclick="return confirm('Are you sure want to delete?')" href="delete_profile.php?id=<?php echo $row['id'];?>&gambar=<?php echo $row['gambar'];?>" class="btn btn-danger my-1">Delete</a></td>
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
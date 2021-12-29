<?php
	include 'header.php';	
?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Artikel</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Artikel</li>
			</ol>
			<a href="artikel_tambah.php" class="btn btn-dark my-1"><i class="fas fa-plus mx-1"></i>Tambah</a>
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-table me-1"></i>
					Data Artikel
				</div>
				<div class="card-body">
					<table id="datatablesSimple">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Tanggal</th>
								<th>Gambar</th>
								<th>Deskripsi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Tanggal</th>
								<th>Gambar</th>
								<th>Deskripsi</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>
							<?php
								include 'config.php';
								$no = 0;
								$query = mysqli_query($connect, "SELECT * FROM artikel");
								while($row = mysqli_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $no+1; ?></td>
									<td><?php echo $row['judul']; ?></td>
									<td><?php echo $row['tanggal']; ?></td>
								<td><img src="assets/gambar/artikel/<?php echo $row['gambar']; ?>" width="200" height="100"></td>
								<td><?php echo $row['deskripsi']; ?></td>
								<td><a href="artikel_edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary my-1">Edit</a><br><a onclick="return confirm('Are you sure want to delete?')" href="delete_article.php?id=<?php echo $row['id'];?>&gambar=<?php echo $row['gambar'];?>" class="btn btn-danger my-1">Delete</a></td>
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
																
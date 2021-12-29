<?php
	include 'config.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$result = mysqli_query($connect, $sql);
		if ($result->num_rows > 0) {
			session_start();
			$row = mysqli_fetch_array($result);
			$_SESSION['id'] = $row['id'];
			echo '<script>alert("Login success!");
			window.location.href="index.php"</script>';
			} else {
			echo "<script>alert('Incorrect username or password!')</script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
	</head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="username" name="username" type="text" placeholder="Psername" />
                                                <label for="username">Username</label>
											</div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                                <label for="password">Password</label>
											</div>
										<div class="d-flex align-items-center justify-content-center mt-4 mb-0">
										<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
										</div>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
	</body>
</html>

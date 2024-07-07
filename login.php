<?php include 'layouts/session.php'; ?>

<?php
if ($_POST && isset($_POST['login'])) {
	// $email = $_POST['email'];
	// $password = $_POST['password'];

	$_SESSION['username'] = "İntek Celik";
	$_SESSION['login'] = true;
	 header('Location: index.php?page=home');
}
?>

<?php include 'layouts/head-main.php'; ?>

<head>

	<title>Login - HRMS admin template</title>
	<?php include 'layouts/title-meta.php'; ?>

	<?php include 'layouts/head-css.php'; ?>

</head>

<body class="account-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<div class="account-content">
			<a href="job-list.php" class="btn btn-primary apply-btn">Apply Job</a>
			<div class="container">

				<!-- Account Logo -->
				<div class="account-logo">
					<a href="admin-dashboard.php"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
				</div>
				<!-- /Account Logo -->

				<div class="account-box">
					<div class="account-wrapper">
						<h3 class="account-title">Login</h3>
						<p class="account-subtitle">Access to our dashboard</p>

						<!-- Account Form -->
						<form action="login.php" method="post">
							<div class="input-block mb-4">
								<label class="col-form-label">Email Address</label>
								<input class="form-control" type="text" value="admin@dreamstechnologies.com">
							</div>
							<div class="input-block mb-4">
								<div class="row align-items-center">
									<div class="col">
										<label class="col-form-label">Password</label>
									</div>
									<div class="col-auto">
										<a class="text-muted" href="forgot-password.php">
											Forgot password?
										</a>
									</div>
								</div>
								<div class="position-relative">
									<input class="form-control" type="password" value="123456" id="password">
									<span class="fa-solid fa-eye-slash" id="toggle-password"></span>
								</div>
							</div>
							<div class="input-block mb-4 text-center">
								<button class="btn btn-primary account-btn" name="login" type="submit">Login</button>
							</div>
							<div class="account-footer">
								<p>Don't have an account yet? <a href="register.php">Register</a></p>
							</div>
						</form>
						<!-- /Account Form -->

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->
	<?php include 'layouts/vendor-scripts.php'; ?>

</body>

</html>
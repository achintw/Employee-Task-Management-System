



<!DOCTYPE html>
<html>
<head>
	<title>ETMS Project</title>


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

	<!-- External CSS file -->
	<link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time(); ?>">
<!-- 	<style type="text/css">
		body{
			background-color: #355764;
			padding: 0px;
			margin: 0px;
}
	</style> -->

</head>
<body>
	<div class="row">
		<div class="col-md-4 m-auto" id="home_page">
			<center><h3>Choose Login Role ?</h3></center><br/>

			<!-- User login button -->
			<a href="user_login.php" class="btn btn-success" style="margin-right: 20px">User Login</a>

			<a href="register.php" class="btn btn-warning" style="margin-right: 20px">User Registration</a>

			<a href="admin/admin_login.php" class="btn btn-info">Admin Login</a>

		</div>
	</div>
</body>
</html>

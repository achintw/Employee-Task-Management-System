
<?php
	session_start();
	include('connection.php');
	// agar login button pe click hua == set hua
	if(isset($_POST['userLogin'])){
		$query = "select email, password, name, uid from users where email = '$_POST[email]' AND password = '$_POST[password]' ";

		$query_run = mysqli_query($connection, $query);

		if(mysqli_num_rows($query_run)){

			while($row = mysqli_fetch_assoc($query_run)){
				// sessions
				$_SESSION['email'] = $row['email'];
				
				$_SESSION['name'] = $row['name'];

				$_SESSION['uid'] = $row['uid'];
			}

			// if more than one tuples then problem na
			echo "<script type='text/javascript'>
				window.location.href = 'user_dashboard.php';
			</script>";
		}
		else{
			echo "<script type='text/javascript'>
				alert('Please Enter correct info');
				window.location.href = 'user_login.php';
			</script>";
		}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>ETMS | LOGIN</title>


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
		<div class="col-md-3 m-auto" id="login_home_page">
			<center><h3 style="color: #FFFFFF; padding: 5px; width: 15vw;">USER LOGIN</h3></center>

			<!-- login form -->
			<form action="" method="post">
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Enter email" required>
				</div>
				
				<div class="form-group" style="margin-top: 10px">
					<input type="password" name="password" class="form-control" placeholder="Enter password" required>
				</div>
				
				<div class="form-group">
					<center><input type="submit" name="userLogin" value="Login" class="btn btn-warning" style="margin-top: 10px"></center>
				</div>
			</form>
			
			<center><a href="index.php" class="btn btn-danger" style="margin-top: 10px;">Go to Home</a></center>
		</div>
	</div> 

</body>
</html>

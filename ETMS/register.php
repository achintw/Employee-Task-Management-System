
<?php
	include('connection.php');
	if(isset($_POST['userRegistration'])){
		$query = "insert into users values(null, '$_POST[name]', '$_POST[email]', '$_POST[password]', $_POST[mobile])";

		$query_run = mysqli_query($connection, $query);
		if($query_run){
			echo "<script type='text/javascript'>
				alert('User registered successfully...');
				window.location.href = 'index.php';
			</script>";
			}
		else{
			echo "<script type='text/javascript'>
				alert('Error, try again.');
				window.location.href = 'register.php';
			</script>";
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ETMS | REGISTER</title>

	


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
		<div class="col-md-3 m-auto" id="register_home_page">
			<center><h3 style="color: #FFFFFF; padding: 5px; width: 11vw;">User Registration</h3></center>

			<!-- login form -->
			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
				</div>

				<div class="form-group" style="margin-top: 10px">
					<input type="email" name="email" class="form-control" placeholder="Enter email" required>
				</div>

				
				<div class="form-group" style="margin-top: 10px">
					<input type="password" name="password" class="form-control" placeholder="Enter password" required>
				</div>

				<div class="form-group" style="margin-top: 10px">
					<input type="text" name="mobile" class="form-control" placeholder="Enter Phone Number" required>
				</div>

				
				<div class="form-group">
					<center><input type="submit" name="userRegistration" value="Register" class="btn btn-warning" style="margin-top: 10px"></center>
				</div>

			</form>

			
			<center><a href="index.php" class="btn btn-danger" style="margin-top: 10px;">Go to Home</a></center>
		</div>
	</div> 

</body>
</html>

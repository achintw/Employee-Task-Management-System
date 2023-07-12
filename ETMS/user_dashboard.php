 <?php
 	session_start();

 	if(isset($_SESSION['email'])){  


 	include('connection.php');
 	if(isset($_POST['submit_leave'])){
 		$query = "insert into leaves values(null, $_SESSION[uid], '$_POST[subject]', '$_POST[message]', 'No Action')";

 		$query_run = mysqli_query($connection, $query);
 		if ($query_run){
 		// if more than one tuples then problem na
			echo "<script type='text/javascript'>
				alert('Form submitted successfully...');
				window.location.href = 'user_dashboard.php';
			</script>";
		}
		else{
			echo "<script type='text/javascript'>
				alert('Please try again...');
				window.location.href = 'user_dashboard.php';
			</script>";
		}

 	}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

	<!-- External CSS file -->
	<link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time(); ?>">

	<script type="text/javascript">
	$(document).ready(function(){
		$("#manage_task").click(function(){
			$("#right_sidebar").load("task.php");
		});
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#apply_leave").click(function(){
			$("#right_sidebar").load("leaveForm.php");
		});
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#leave_status").click(function(){
			$("#right_sidebar").load("leave_status.php");
		});
	});
	</script>

</head>
<body>
	<!-- Header code starts here -->
	<div class="row" id="header">
		<div class="col-md-12">
			<div class="col-md-4" style="display: inline-block;">
				<h3 style="color: #000000"><b>Task Management System</b></h3>
			</div>	
			<div class="col-md-6" style="display: inline-block; text-align: right;">
				<b style="color: #000000">Email: </b> <?php echo $_SESSION['email']; ?> 
				
				
				<span style="margin-left: 25px;"><b style="color: #000000">Name: </b><?php echo $_SESSION['name']; ?></span>
			</div>
		</div>
	</div>
	<!-- Header code ends here -->


	<div class="row">
		<div class="col-md-2" id="left_sidebar">
			<table class="table">
				<tr>
					<td style="text-align: center;">
						<a href="user_dashboard.php" type="button" id="logout_link">Dashboard</a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<a type="button" class="link" id="manage_task">Update Task</a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<a type="button" class="link" id="apply_leave">Apply Leave</a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<a type="button" class="link" id="leave_status">Leave Status</a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<a href="logout.php" type="button" id="logout_link">Logout</a>
					</td>
				</tr>
			</table>

		</div>
		<div class="col-md-10" id="right_sidebar">
			<h4>Instructions for Employees</h4>
			<ul style="line-height: 3em;
			font-size: 1.2em; list-style-type: none;">
				<li>1. This is a project.</li>
				<li>2. Too much time its taking to make.</li>
				<li>3. I'm not able to study, procrastination max.</li>
				<li>4. I'll just stop thinking and start doing.</li>
			</ul>

		</div>	

	</div>
</body>
</html>
<?php
}
else{
	header('Location:user_login.php');
}
?>
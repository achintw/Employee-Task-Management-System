<?php
	session_start();
	include('../connection.php');
	if(isset($_POST['create_task'])){
		$query = "insert into tasks values(null, $_POST[id],  '$_POST[description]', '$_POST[start_date]', '$_POST[end_date]', 'Not Started')";
		$query_run = mysqli_query($connection, $query);
		if($query_run){
			// if more than one tuples then problem na
			echo "<script type='text/javascript'>
				alert('Task created successfull...');
				window.location.href = 'admin_dashboard.php';
			</script>";
		}
		else{
			echo "<script type='text/javascript'>
				alert('Please try again...');
				window.location.href = 'admin_dashboard.php';
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

	<!-- External CSS file -->
	<link rel="stylesheet" type="text/css" href="../css/styles.css?v=<?php echo time(); ?>">

	<script type="text/javascript">
	$(document).ready(function(){
		$("#create_task").click(function(){
			$("#right_sidebar").load("create_task.php");
		});
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#manage_task").click(function(){
			$("#right_sidebar").load("../manage_task.php");
		});
	});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#view_leave").click(function(){
			$("#right_sidebar").load("view_leave.php");
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
						<a href="admin_dashboard.php" type="button" id="logout_link">Dashboard</a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<a type="button" class="link" id="create_task">Create Task</a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<a type="button" class="link" id="manage_task">Manage Task</a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<a type="button" class="link" id="view_leave">Leave applications</a>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<a href="../logout.php" type="button" class="logout_link">Logout</a>
					</td>
				</tr>
			</table>

		</div>
		<div class="col-md-10" id="right_sidebar">
			<h4>Instructions for Admin</h4>
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
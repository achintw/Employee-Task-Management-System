<?php
	include('../connection.php');
	if(isset($_POST['edit_task'])){
		// $query3 = "update tasks set description = '$_POST[description]', start-date = '$_POST[start_date]', end_date = '$_POST[end_date]' where tid = $_GET[id]";
		$query3 = "update tasks set start_date = '$_POST[start_date]' where tid = '$_GET[id]'";
		$query_run3 = mysqli_query($connection, $query3);
		if($query_run3){
			echo "<script type='text/javascript'>
				alert('Task updated successfull...');
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
	<title>ETMS</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

	<!-- External CSS file -->
	<link rel="stylesheet" type="text/css" href="../css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
	<header>
		<div class="row" id="header">
			<div class="col-md-12">
				<h3><b class="fa fa-solid fa-list" style="padding-right: 15px;">Task Managment System</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4" style="color: white; margin-left: 10px; margin-top: 10px;">
				<h3 style="color: white">Edit the task</h3><br>

				<?php
					$query = "select * from tasks where tid = $_GET[id]";
					$query_run = mysqli_query($connection, $query);
					if($query_run){
						while($row = mysqli_fetch_assoc($query_run)){
						?>


						<form action="" method="post">
							<div class="form-group">
								<input type="hidden" name="id" class="form-control" value="" required>
							</div>
							<div class="form-group">
								<label>Select user</label>
								<select class="form-control" name="id" required>
									<option>-Select-</option>
									<?php
										$query1 = "select uid, name from users";
										$query_run1 = mysqli_query($connection, $query1);
										if(mysqli_num_rows($query_run1)){
											while ($row1 = mysqli_fetch_assoc($query_run1)) {
												?>
												<option value="<?php echo $row1['uid'];?>"><?php echo $row1['name']; ?></option>
												<?php
											}
										}
									?>
								</select>
							</div>

							<div class="form-group">
								<label>Description:</label>
								<textarea class="form-control" rows="3" cols="50"
								name="description" required>
									<?php echo $row['description'];?>
								</textarea>
							</div>
							<div class="form-group">
								<label>Start date:</label>
								<input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']; ?>" required>
							</div>
							<div class="form-group">
								<label>End date:</label>
								<input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']; ?>" required>
							</div>
							<input type="submit" class="btn btn-warning" name="edit_task" value="Update" style="margin-top: 10px;">

						</form>
						<?php
				// first while ends
					}
				}
						?>
			</div>
		</div>
	</header>
</body>
</html>
<?php
	session_start();
	include('connection.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

	<!-- External CSS file -->
	<link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time(); ?>"> 
</head>
<body>
	<center><h3>Your Tasks : </h3></center>
	<table class="table" style="background-color: whitesmoke; width: 75vw;">
		<tr>
			<th>S.No</th>
			<th>Task ID</th>
			<th>Description</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php
			$query = "select * from tasks where uid = $_SESSION[uid]";
			$query_run = mysqli_query($connection, $query);
			$sno = 1;
			while($row = mysqli_fetch_assoc($query_run)){
				?>
				<tr>
					<td><?php echo $sno; ?></td>
					<td><?php echo $row['tid']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<td><?php echo $row['start_date']; ?></td>
					<td><?php echo $row['end_date']; ?></td>
					<td><?php echo $row['status']; ?></td>
					<td><a href="update_status.php?id=<?php echo $row['tid']; ?>">Update</a></td>
				</tr>
			<?php
			$sno = $sno + 1;
			}

		?>


	</table>
</body>
</html>
<?php include('processmedication.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>
    <div class="row">
		<nav class="col-sm-8 text-right"> 	 
			 <?php if (isset($_SESSION['success'])): ?>   
			 <?php endif ?> 
			 <?php if(isset($_SESSION["username"])): ?>
			 <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			 <a href="index.php?logout='1'">Logout</a>
			 <?php endif ?>
		</nav>
	</div>		
	<?php require_once 'processmedication.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</div>
	<?php endif ?>
	<?php
		$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM medication where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
	    

		<br><br><br>
			<table class="table">
			
				<thead>
					<tr>
						<th>Id</th>
						<th>Flocks Id</th>
						<th>Type</th>
						<th>Timestamp</th>
						<th>Amout</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['flocksid']?></td>
							<td><?php echo $row['type']?></td>
							<td><?php echo $row['timestamp']?></td>
							<td><?php echo $row['amout']?></td>
							<td>
								<a href="editmedication.php?edit=<?php echo $row['id'];?>"
									class="btn">Edit</a>
								<a href="processmedication.php?delete=<?php echo $row['id'];?>"
									class="btn btn-danger">Delete</a>
									
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>

	<a href="editmedication.php"class="btn">Add Medication</a>
	<a href="index.php"class="btn">Back</a>
</body>
</html>
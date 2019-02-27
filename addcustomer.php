<?php include('processcustomer.php');?>

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
	<?php require_once 'processcustomer.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM customer where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<tr>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Contact No.</th>
						<th>address</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['lastname']?></td>
							<td><?php echo $row['firstname']?></td>
							<td><?php echo $row['middlename']?></td>
							<td><?php echo $row['contactno']?></td>
							<td><?php echo $row['address']?></td>
							<td>
								<a href="editcustomer.php?edit=<?php echo $row['id'];?>"
									class="btn">Edit</a>
								<a href="processcustomer.php?delete=<?php echo $row['id'];?>"
									class="btn btn-danger">Delete</a>
									
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>

	<a href="editcustomer.php"class="btn">Add Customer</a>
	<a href="index.php"class="btn">Back</a>
</body>
</html>
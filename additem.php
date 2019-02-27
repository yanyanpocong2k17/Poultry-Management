<?php include('processitem.php');?>

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
			 <a href="indexitem.php?logout='1'">Logout</a>
			 <?php endif ?>
		</nav>
	</div>		
	<?php require_once 'processitem.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM item where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<tr>
						<th>Description</th>
						<th>Unit</th>
						<th>Quality</th>
						<th>Price</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							
							<td><?php echo $row['description']?></td>
							<td><?php echo $row['unit']?></td>
							<td><?php echo $row['quality']?></td>
							<td><?php echo $row['price']?></td>
							<td>
								<a href="edititem.php?edit=<?php echo $row['id'];?>"
									class="btn">Edit</a>
								<a href="processitem.php?delete=<?php echo $row['id'];?>"
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

	<a href="edititem.php"class="btn">Add Item</a>
	<a href="index.php"class="btn">Back</a>
</body>
</html>
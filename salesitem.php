<?php include('processsalesitem.php');?>
<<<<<<< HEAD

=======
>>>>>>> changes 4
<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
		<link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap-3.3.7/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <link href="css/css/style.css" rel="stylesheet">
</head>
<body>
	<br>
    <nav class="navbar navbar-inverse col-sm-10 col-sm-offset-1">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
			
            </button>
            <a class="navbar-brand" href="#">
			
                <span id="brand-title">ADD SALES ITEM</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
		    </div>
			
</nav>	

	<br><br><br>
	<?php require_once 'processsalesitem.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	<div class="col-sm-8 col-sm-offset-2">	
	<center><div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</center>
	</div>
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
		$result = $mysqli->query("SELECT * FROM salesitem where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<div class="col-sm-offset-2">	
		<a href="index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a>
		</div>
		<p>&nbsp;</p>
		
		
		
		<div class="row">
				<div class="col-sm-8 col-sm-offset-2">	
				<div class="container-fluid">
					
			<table class="table table-condensed table-hover table-striped">
				<thead>
					<tr>
						<th>#</th>
<<<<<<< HEAD
						<th>Date</th>
						<th>Item id</th>
						<th>Customer id</th>
						<th>Date</th>
						<th>Quantity</th>
						<th>Price</th>
=======
						<th>Item id</th>
						<th>Customer id</th>
						<th>Timestamp</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Total</th>
>>>>>>> changes 4
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
<<<<<<< HEAD
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['item_id']?></td>
							<td><?php echo $row['customer_id']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['quantity']?></td>
							<td><?php echo $row['price']?></td>
							<td>
								<a href="editsalesitem.php?edit=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-eye-open" title="View Profile"></span></a> |
=======
							<td><?php echo $row['item_id']?></td>
							<td><?php echo $row['customer_id']?></td>
							<td><?php echo $row['timestamp']?></td>
							<td><?php echo $row['quantity']?></td>
							<td><?php echo $row['price']?></td>
							<td><?php echo $row['total']?></td>
							<td>
								
>>>>>>> changes 4
								<a href="processsalesitem.php?delete=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-trash" title="Delete"></span></i></a>	
									
							</td>
						</tr>
						<?php endwhile;?>
<<<<<<< HEAD
			</table>
			</div>
			</div>
			</div>
=======
					
			</table>
			
			</div>
			</div>
			</div>
				
>>>>>>> changes 4
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>	
<<<<<<< HEAD
	<div class="col-sm-offset-9">	
	<button type="submit" class="btn"><span class="glyphicon glyphicon-folder-open"></span><a href="editsalesitem.php"> SalesItem</a></button>
	</div>
=======
	
	
	<div class="col-sm-offset-9">	
	<button type="submit" class="btn"><span class="glyphicon glyphicon-folder-open"></span><a href="editsalesitem.php"> SalesItem</a></button>
	
	</div>
	
>>>>>>> changes 4
	<?php include('footer.php');?>
</body>
</html>
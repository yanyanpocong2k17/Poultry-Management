<?php include('processcustomer.php');?>

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
			
                <span id="brand-title">ADD CUSTOMER</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
		    </div>
			
</nav>	

	<br><br><br>
	<?php require_once 'processcustomer.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM customer where userid='$userid'") or die($mysqli->error);
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
							<td><?php echo $row['customer_id']?></td>
							<td><?php echo $row['lastname']?></td>
							<td><?php echo $row['firstname']?></td>
							<td><?php echo $row['middlename']?></td>
							<td><?php echo $row['contactno']?></td>
							<td><?php echo $row['address']?></td>
							<td>
								<a href="editcustomer.php?edit=<?php echo $row['customer_id'];?>"><span class="glyphicon glyphicon-eye-open" title="View Profile"></span></a> |
								<a href="processcustomer.php?delete=<?php echo $row['customer_id'];?>"><span class="glyphicon glyphicon-trash" title="Delete"></span></i></a>		
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		</div>
		</div>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>
	<div class="col-sm-offset-9">	
	<button type="submit" class="btn"><span class="glyphicon glyphicon-folder-open"></span><a href="editsale.php"><a href="editcustomer.php"> Customer</a></button>
	</div>
	
	<?php include('footer.php');?>
</body>
</html>
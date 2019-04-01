<?php include('processmedication.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Medication</title>
		<link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap-3.3.7/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <link href="css/css/style.css" rel="stylesheet">
		<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
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
			
                <span id="brand-title">ADD MEDICATION</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
		    </div>
			
</nav>	

	<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<div class="col-sm-offset-2">	
		<a href="addmedication.php" class="next">&laquo; Back</a>
		</div>
		
	
		
	<div class="row">
	<form action="processmedication.php" method="POST">
	<div style="text-align:center" class="col-sm-3 col-sm-offset-1">
			</div>
		<div class="col-sm-5">
		<center><label>Flocks Name</label></center>
		<?php
		
			$sql = "SELECT * FROM `flocks`";
			$result = mysqli_query($mysqli, $sql);
			
		?>
		<select name="flocksid" class="form-control">
			<?php
				$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)) {
			?>
				
			<option value="<?php echo $row['flocksid'];?>"><?php echo $row['breed'];?></option>
				<?php
				}
				?>	
		</select>
		<br>
			<center><label>Type Date</label>
			<input name="timestamp" class="form-control" type="datetime-local" value="<?php echo $timestamp;?>"placeholder="Enter the number of rooster" required>
			<input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			<br><label>Type of medication</label>
			<select name="type" class="form-control" required>
			<option>Choose...</option>
			<option value="Live vaccine ">Live vaccine </option>
			<option value="Attenuated vaccine">Attenuated vaccine</option>
			<option value="Killed vaccine ">Killed vaccine </option>
			</select>
			<br><label>Amout</label>
			<br><input type="number" name="amout" class="form-control" value="<?php echo $amout;?>"placeholder="Enter the number of Breed" required>
		</center>
		<br>
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="addmedication.php"class="btn">back</a>
		<?php else: ?>
						<div class="col-sm-offset-5">	
			<button type="submit" class="btn" name="save"><span class="glyphicon glyphicon-save">save</button>
			</div>
		<?php endif;?>
		</div>
		</div>
	</form>
	</div>
	<?php include('footer.php');?>
</body>
</html>
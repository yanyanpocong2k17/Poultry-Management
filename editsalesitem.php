<?php include('processsalesitem.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>salesitem</title>
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
			
                <span id="brand-title">ADD SALES ITEM</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
		    </div>
			
</nav>	

		<p>&nbsp;</p>
		
	<div class="row">
	<form action="processsalesitem.php" method="POST">
	<div style="text-align:center" class="col-sm-3 col-sm-offset-1">
			</div>
		<div class="col-sm-5">
	<center><label>Sale Id</label></center>
		
		<?php
		
			$sql = "SELECT * FROM `sale`";
			$result = mysqli_query($mysqli, $sql);
			
		?>
		<select name="sale_id" class="form-control">
			<?php
				$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)) {
			?>
				
			<option value="<?php echo $row['sale_id'];?>"><?php echo $row['sale_id'];?></option>
				<?php
					
				}
				?>
		</select>
		<center><label>Item id</label></center>
		<?php
	
			$sql = "SELECT * FROM `item`";
			$result = mysqli_query($mysqli, $sql);
			
		?>
		<select name="item_id" class="form-control">
			<?php
				$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)) {
			?>
				
			<option value="<?php echo $row['item_id'];?>"><?php echo $row['description'];?></option>
				<?php
				}
				?>
		</select>
		
		<center><label>Customer id</label></center>
		
		<?php
		
			$sql = "SELECT * FROM `customer`";
			$result = mysqli_query($mysqli, $sql);
			
		?>
		<select name="customer_id" class="form-control">
			<?php
				$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)) {
			?>
				
			<option value="<?php echo $row['customer_id'];?>"><?php echo $row['lastname'];?></option>
				<?php
				}
				?>
		</select>
		
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<center><label>Date</label>
			<input type="date" name="date" class="form-control" value="<?php echo $date;?>"placeholder="Enter the number of rooster" required>
			<label>Quantity</label>
			<input type="number" name="quantity" class="form-control" value="<?php echo $quantity;?>"placeholder="Enter the number of Breed" required>
			<label>Price</label>
			<input type="number" name="price" class="form-control" value="<?php echo $price;?>"placeholder="Enter the number of rooster" required>
			</center>
			<br>
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="salesitem.php"class="btn">back</a>
			
		<?php else: ?>
		<div class="col-sm-offset-4">
			<a href="salesitem.php" class="next">&laquo; Back</a>
			<button type="submit" class="btn" name="save"><span class="glyphicon glyphicon-save"></span>save</button>
			
		</div>
		<?php endif;?>
		
		</div>
		</div>
	</form>
	</div>
	<?php include('footer.php');?>
</body>
</html>
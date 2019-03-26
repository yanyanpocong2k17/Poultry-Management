<?php include('server.php'); 

   if (empty($_SESSION['username'])){
	   header('location: login.php');
   }
   
  
?>  
<!DOCTYPE html>
<head>
	<title>Register</title>
	<link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap-3.3.7/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
	<link href="css/style3.css" rel="stylesheet">
</head>
<?php include('indexbody.php'); ?>
<body>
		<div class="sidenav">
			<a href="home.php" class="btn"><?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		 <?php endif ?> </a>
			<hr>
			<button class="dropdown-btn">Item 
			<span class="glyphicon glyphicon-floppy-open"></span>
			</button>
			  <div class="dropdown-container">
				<a href="additem.php">Add <span class="glyphicon glyphicon-eye-open"></span></a>
			  </div>
			<hr>
			<button class="dropdown-btn">Sales
						<span class="glyphicon glyphicon-floppy-open"></span>
			</button>
			  <div class="dropdown-container">
				<a href="addsale.php">Add <span class="glyphicon glyphicon-eye-open"></span></a>
			  </div>
			<hr>
			<button class="dropdown-btn">Feeds 
			<span class="glyphicon glyphicon-floppy-open"></span>
			</button>
			  <div class="dropdown-container">
				<a href="addfeeds.php">Add <span class="glyphicon glyphicon-eye-open"></span></a>
			  </div>
			<hr>
			  <div class="dropdown-container">
				<a href="addmedication.php">Add <span class="glyphicon glyphicon-eye-open"></span></a>
			  </div>
			<button class="dropdown-btn">Flocks
						<span class="glyphicon glyphicon-floppy-open"></span>
			</button>
			  <div class="dropdown-container">
				<a href="add.php">Add <span class="glyphicon glyphicon-eye-open"></span></a>
			  </div>
			<hr>
			<button class="dropdown-btn">Customer
			<span class="glyphicon glyphicon-floppy-open"></span>			</button>
			  <div class="dropdown-container">
				<a href="addcustomer.php">Add <span class="glyphicon glyphicon-eye-open"></span></a>
			  </div>
			<hr>
			<button class="dropdown-btn">Medication 
						<span class="glyphicon glyphicon-floppy-open"></span>
			</button>
			<div class="dropdown-container">
				<a href="addmedication.php">Add <span class="glyphicon glyphicon-eye-open"></span></a>
			  </div>
			<hr>
			<button class="dropdown-btn">Sales Item 
						<span class="glyphicon glyphicon-floppy-open"></span>
			</button>
			
			<div class="dropdown-container">
				<a href="salesitem.php"> Add <span class="glyphicon glyphicon-eye-open"></span></a>
			  </div>
			<hr>
			<button class="dropdown-btn">Eggs
						<span class="glyphicon glyphicon-floppy-open"></span>
			</button>
			
			<div class="dropdown-container">
				<a href="addegss.php"> Add <span class="glyphicon glyphicon-eye-open"></span></a>
			  </div>
			<hr>
			 <a href="index.php?logout='1'">Logout          <span class="glyphicon glyphicon-log-out"></span></a>
		</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<body>
</body>
</body>
</html>
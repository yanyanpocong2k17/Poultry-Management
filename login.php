<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<p>&nbsp;<p>&nbsp;<p>&nbsp;<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<center>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</center>
<div id="id01" class="modal">
	<form class="modal-content animate" action="login.php" method="POST">
		<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<img src="picture/images.png" alt="Avatar" class="avatar">
		</div>
		<?php if (count($errors) > 0): ?>
			<div class="error">
				<?php foreach ($errors as $error): ?>
				<p><?php echo $error; ?></p>
				<?php endforeach?>
			</div>
		<?php endif ?>
		<div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" name="username" placeholder="Enter Username" required />
			<label for="psw"><b>Password</b></label>
			<input type="password" name="password" placeholder="Enter Password" required />
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
		<div class="container" style="background-color:#f1f1f1">
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			<span class="psw">Not yet a member? <a href="register.php">Sign Up</a></span>
		</div>
	</form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
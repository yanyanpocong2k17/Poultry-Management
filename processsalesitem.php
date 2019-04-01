<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
<<<<<<< HEAD
<<<<<<< HEAD
$sale_id ="";
$date ="";
=======
>>>>>>> changes 4
=======
>>>>>>> changes 5
$item_id ="";
$customer_id ="";
$quantity ="";
$price ="";

if(isset($_POST['save'])){
<<<<<<< HEAD
<<<<<<< HEAD
	$sale_id = $_POST['sale_id'];
	$date = $_POST['date'];
=======
	$description = $_POST['description'];
>>>>>>> changes 4
=======
	$description = $_POST['description'];
>>>>>>> changes 5
	$customer_id = $_POST['customer_id'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$item = $_POST['item_id'];
<<<<<<< HEAD
<<<<<<< HEAD
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
=======
=======
>>>>>>> changes 5
	$total = $quantity * $price;
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);

<<<<<<< HEAD
>>>>>>> changes 4
=======
>>>>>>> changes 5
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];
<<<<<<< HEAD
<<<<<<< HEAD
		

	}

	$mysqli->query("INSERT INTO salesitem (userid,date,sale_id,customer_id,quantity,price,item_id) VALUES ($userid,'$date',$sale_id,$customer_id,'$quantity','$price',$item)") or
=======
=======
>>>>>>> changes 5
		 
	}

	$mysqli->query("INSERT INTO salesitem (userid,customer_id,quantity,price,item_id,total) VALUES ($userid,$customer_id,'$quantity','$price',$item,$total)") or
<<<<<<< HEAD
>>>>>>> changes 4
=======
>>>>>>> changes 5
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
<<<<<<< HEAD
<<<<<<< HEAD
	header("location:salesitem.php");
=======
	header("location:editsalesitem.php");
>>>>>>> changes 4
=======
	header("location:editsalesitem.php");
>>>>>>> changes 5
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM salesitem WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:salesitem.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
<<<<<<< HEAD
<<<<<<< HEAD
	$result = $mysqli->query("SELECT * FROM salesitem WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$date = $row['date'];
		$sale_id = $row['sale_id'];
=======
=======
>>>>>>> changes 5
	
	$result = $mysqli->query("SELECT * FROM salesitem WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		
<<<<<<< HEAD
>>>>>>> changes 4
=======
>>>>>>> changes 5
		$customer_id = $row['customer_id'];
		$quantity = $row['quantity'];
		$price = $row['price'];
		$item_id = $row['item_id'];
<<<<<<< HEAD
<<<<<<< HEAD
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$date = $_POST['date'];
	$sale_id = $_POST['sale_id'];
=======
=======
>>>>>>> changes 5
		
	}
}
if(isset($_POST['update'])){
	$total = $quantity * $price;
	$id = $_POST['id'];
	$total = $_POST['total'];
<<<<<<< HEAD
>>>>>>> changes 4
=======
>>>>>>> changes 5
	$customer_id = $_POST['customer_id'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	
	
<<<<<<< HEAD
<<<<<<< HEAD
	$mysqli->query("UPDATE salesitem SET sale_id='$sale_id',date='$date',customer_id='$customer_id',quantity='$quantity',price='$price' WHERE id=$id") or die($mysqli->error);
=======
	$mysqli->query("UPDATE salesitem SET customer_id='$customer_id',quantity='$quantity',price='$price' WHERE id=$id") or die($mysqli->error);
>>>>>>> changes 4
=======
	$mysqli->query("UPDATE salesitem SET customer_id='$customer_id',quantity='$quantity',price='$price' WHERE id=$id") or die($mysqli->error);
>>>>>>> changes 5
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:salesitem.php');
}

<<<<<<< HEAD
<<<<<<< HEAD

=======
	
>>>>>>> changes 4
=======
	
>>>>>>> changes 5
?>
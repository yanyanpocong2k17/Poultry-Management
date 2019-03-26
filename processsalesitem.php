<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$sale_id ="";
$date ="";
$item_id ="";
$customer_id ="";
$quantity ="";
$price ="";

if(isset($_POST['save'])){
	$sale_id = $_POST['sale_id'];
	$date = $_POST['date'];
	$customer_id = $_POST['customer_id'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$item = $_POST['item_id'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];
		

	}

	$mysqli->query("INSERT INTO salesitem (userid,date,sale_id,customer_id,quantity,price,item_id) VALUES ($userid,'$date',$sale_id,$customer_id,'$quantity','$price',$item)") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:salesitem.php");
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
	$result = $mysqli->query("SELECT * FROM salesitem WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$date = $row['date'];
		$sale_id = $row['sale_id'];
		$customer_id = $row['customer_id'];
		$quantity = $row['quantity'];
		$price = $row['price'];
		$item_id = $row['item_id'];
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$date = $_POST['date'];
	$sale_id = $_POST['sale_id'];
	$customer_id = $_POST['customer_id'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	
	
	$mysqli->query("UPDATE salesitem SET sale_id='$sale_id',date='$date',customer_id='$customer_id',quantity='$quantity',price='$price' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:salesitem.php');
}


?>
<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$sale_id='';
$update = false;
//$userid ="";
$timestamp="";
$customer_id="";



if(isset($_POST['save'])){
	$userid = $_POST['sale_id'];
	$customer_id = $_POST['customer_id'];
	$timestamp = $_POST['timestamp'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO sale (userid,customer_id,timestamp) VALUES ('$userid','$customer_id','$timestamp')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:addsale.php");
}
if(isset($_GET['delete'])){
	$sale_id =$_GET['delete'];
	$mysqli->query("DELETE FROM sale WHERE sale_id=$sale_id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:addsale.php");
	
	
}
if(isset($_GET['edit'])){
	$sale_id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM sale WHERE sale_id=$sale_id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$timestamp = $row['timestamp'];
		$customer_id = $row['customer_id'];
		
		
	}
}
if(isset($_POST['update'])){
	$sale_id = $_POST['sale_id'];
	$timestamp = $_POST['timestamp'];
	$customer_id = $_POST['customer_id'];
	
	
	$mysqli->query("UPDATE sale SET timestamp='$timestamp',customer_id='$customer_id' WHERE sale_id=$sale_id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:addsale.php');
}


?>
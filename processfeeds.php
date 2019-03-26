<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$types ="";
$quality="";
$unit ="";
$timestamp ="";
$price ="";



if(isset($_POST['save'])){
	$types = $_POST['types'];
	$quality = $_POST['quality'];
	$unit = $_POST['unit'];
	$timestamp = $_POST['timestamp'];
	$price = $_POST['price'];
	$username= $_SESSION["username"];
	$flocks = $_POST['flocksid'];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO feeds (userid,flocksid,types,quality,unit,timestamp,price) VALUES ($userid,$flocks,'$types',$quality,$unit,'$timestamp',$price)") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:addfeeds.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM feeds WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:addfeeds.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM feeds WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$types = $row['types'];
		$quality = $row['quality'];
		$unit = $row['unit'];
		$timestamp = $row['timestamp'];
		$price = $row['price'];
		$flocksid = $row['flocksid'];
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$types = $_POST['types'];
	$quality = $_POST['quality'];
	$unit = $_POST['unit'];
	$timestamp = $_POST['timestamp'];
	$price = $_POST['price'];
	
	$mysqli->query("UPDATE feeds SET types='$types',quality='$quality',unit='$unit',timestamp='$timestamp',price='$price' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:addfeeds.php');
}


?>
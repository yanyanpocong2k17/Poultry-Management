<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$id ="";
$type="";
$timestamp="";
$amout ="";
$flocksid ="";

if(isset($_POST['save'])){
	$type = $_POST['type'];
	$timestamp = $_POST['timestamp'];
	$amout = $_POST['amout'];
	$flocksid = $_POST['flocksid'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO medication (userid,type,timestamp,amout,flocksid) VALUES ('$userid','$type','$timestamp','$amout','$flocksid')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:addmedication.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM medication WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:addmedication.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM medication WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$type = $row['type'];
		$timestamp = $row['timestamp'];
		$amout = $row['amout'];
		$flocksid = $row['flocksid'];
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$type = $_POST['type'];
	$timestamp = $_POST['timestamp'];
	$amout = $_POST['amout'];
	$flocksid = $_POST['flocksid'];
	
	
	$mysqli->query("UPDATE medication SET type='$type',timestamp='$timestamp',amout='$amout',flocksid='$flocksid',id='$id' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:addmedication.php');
}


?>
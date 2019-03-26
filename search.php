<?php
$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));
 
or die("Could not select examples");  
$output = '';
//collect
if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

	$query = mysql_query("SELECT * FROM item WHERE description LIKE '%$searchq%' OR unit LIKE '%$searchq%'") or die("could not search!");
	$count = mysql_num_rows($query);
	if(count == 0){
		$output = 'Theres no result';
	}else{
		while($row = mysql_fetch_array($query)){
			$description = $row['description'];
			$unit = $row['unit'];
			$item_id = $row['item_id'];
			
			$output .= '<div>'.$description.' '.$unit.'</div>';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>search</title>
</head>
<body>
<form action="search.php" method="POST">
	<input type="text" name="search" placeholder="search name...">
	<input type="submit" value=">>">
</form>
<?php print("$output");?>
</body>
</html>
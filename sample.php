<html>
<head><title>wew</title></head>
<body>
	<?php
	if(isset($_GET["choice"])){
		$food=$_GET["choice"];
		$c = count($food);
		$price=0.0;
		
		for($i=0;$i<$c;$i++){
			if($food[$i]==1){
				$price=$price+1;
				echo "You Choice selected checken<br>";
			}
			if($food[$i]==2){
				$price=$price+2;
				echo "You Choice selected Meat<br>";
			}
			if($food[$i]==3){
				$price=$price+3;
				echo "You Choice selected Souvlaki<br>";
			}
			if($food[$i]==4){
				$price=$price+4;
				echo "You Choice selected Pizza<br>";
			}
		}
		echo "Final Price is: " .$price. "<br>";
	}
	
	else{
		echo "Please choice something";
	
	}
	?>
</body>
</html>
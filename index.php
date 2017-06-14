<!DOCTYPE html>
<html>
<head>
	<title>F.L.A.M.E.S</title>
</head>
<style type="text/css">
	* {
		color: red;
		margin: 0;
		text-shadow: 1px 1px white;
		font-size: 30px;
	}
	#background {
		background-image: url('bg.png');
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-size: cover;
		padding: 20%;
	}
	
	.overlay{
		background-color: rgba(255, 255, 255, 0.6);
		width: 60%;
		margin: auto;
		color: black;
		font-size: 30px;
		padding: 30px;
	}
	.button{
		color: black;
	}
	.font {
		color: black;
		font-size: 30px;
	}
	img{
		border-radius: 50%;
		width: 30%;
		margin-bottom: -10%;
	}
</style>
<body>
	<?php 
	$input = "03/02/2016";
	
	echo "Today is " . date("l") . "<br>";
	?>
	<div id="background">
	
	<div class='overlay'>
	<center>
		
		<form action="" method="POST">
		Enter your Name:<br>
			<input type="text" name="name1"><br>
		Enter Your lovers name:<br>
			<input type="text" name="name2"><br><br>
			<input type="submit" value="Let me Scan" class="button" name="submit">	
		</form>
	</center>
	<br>

	<?php
	

	if (isset($_POST['submit'])) {
		$name3 = $_POST['name1'];
		$name4 = $_POST['name2'];

		
		   $name1 = str_replace(' ', '', $name3); // Replaces all spaces with none.
		   $name1 = preg_replace('/[^A-Za-z0-9\-]/', '', $name1); // Removes special chars.
		   $name2 = str_replace(' ', '', $name4); // Replaces all spaces with none.
		   $name2 = preg_replace('/[^A-Za-z0-9\-]/', '', $name2); // Removes special chars.

	


		$name1_array = str_split(strtolower($name1));
		$name2_array = str_split(strtolower($name2));

		


		$count = 0;

		for ($x=0; $x <count($name1_array) ; $x++) { 
			$has_match = 'false';
			for ($y=0; $y <count($name2_array) ; $y++) { 
				if ($name1_array[$x] == $name2_array[$y]) {
					$has_match = 'true';
				}
			}
			if ($has_match == 'false') {
				$count++;
			}
		}

		$count1 = 0;

		for ($x=0; $x <count($name2_array) ; $x++) { 
			$has_match = 'false';
			for ($y=0; $y <count($name1_array) ; $y++) { 
				if ($name2_array[$x] == $name1_array[$y]) {
					$has_match = 'true';
				}
			}
			if ($has_match == 'false') {
				$count1++;
			}
		} // or $total = check_match($name1,$name2) + check_match($name2,$name1);



		$total = $count+$count1;
		echo "<center class = 'font'>$name3 <br> + <br>$name4 <br>=</center>";

		if ($total%6 == 1) {
			echo "<center class = 'font'><img src='friends.jpg'><h1>Friends!</h1></center></div>";
		}
		else if ($total%6 == 2) {
			echo "<center class = 'font'><img src='lovers.jpg'><h1>Lovers!</h1></center></div>";
		}
		else if ($total%6 == 3) {
			echo "<center class = 'font'><img src='anger.jpg'><h1>Anger?!</h1></center></div>";
		}
		else if ($total%6 == 4) {
			echo "<center class = 'font'><img src='marriage.jpg'><h1>Marriage!</h1></center></div>";
		}
		else if ($total%6 == 5) {
			echo "<center class = 'font'><img src='enemy.jpg'><h1>Enemy!</h1></center></div>";
		}
		else if ($total%6 == 0) {
			echo "<center class = 'font'><img src='soulmate.jpg'><h1>Soulmates :O !</h1></center></div>";
		}
	}
	?>
	

<br>
</div>

</body>
</html>
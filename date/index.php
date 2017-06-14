<!DOCTYPE html>
<html>
<head>
	<title>Date</title>
</head>
<body>
	<?php
		$input = "03/02/206"; // dd/mm/yyyy format
		//February 3, 2016

		$input = explode('/', $input);
		$dd = $input[0]/1;
		$mm = $input[1];
		$yyyy = $input[2];

		echo $months[$mm-1].' '.$dd.' '.$yyyy;
	
	?>

</body>
</html>
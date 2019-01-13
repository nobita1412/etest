<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 

	<form method='POST' action=''>
    	<input type="text" name="string">
    	<input type='submit' name='submit'>
    </form>

	<?php
    	if(isset($_POST['string']) && isset($_POST['submit']))
    	{
    		$string = isset($_POST['string']) ? $_POST['string'] : '';
    		$yd = substr($string,6,4);
    		$date = getdate();
    		$yc = (int)$date['year'];
    		$t = $yc - $yd;
    		echo "Tuổi là: " . $t;
    	}
    ?>
</body>
</html>
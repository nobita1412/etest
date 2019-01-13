<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<h1>1 . Viết ra 1 chương trình php in ra địa chỉ ip của bạn ?</h1>

	<?php
		//Kiểm tra xem IP có phải là từ Share Internet  
		if (!empty($_SERVER['HTTP_CLIENT_IP']))     
		  {  
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];  
		  }  
		//Kiểm tra xem IP có phải là từ Proxy  
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
		  {  
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
		  }  
		//Kiểm tra xem IP có phải là từ Remote Address  
		else  
		  {  
			$ip_address = $_SERVER['REMOTE_ADDR'];  
		  }  
		echo "Địa chỉ Client IP là: $ip_address";
	?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
 
    <h1>1 . Viết ra 1 chương trình php in ra trình duyệt hiện tại là gì ?</h1>

    <?php
    	echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

		$browser = get_browser(null, true);
		print_r($browser);
    ?>

</body>
</html>
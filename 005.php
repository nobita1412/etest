<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body> 

    <h1>1 . Viết ra 1 chương trình php in ra độ dài của chuỗi bạn nhập vào ?
    Xây dựng 1 form có 1 ô input cho người dùng nhập chuỗi . sau khi họ ấn enter sẽ hiện ra độ dài của chuỗi</h1>

    <form method='POST' action=''>
    	<input type="text" name="string">
    	<input type='submit' name='submit'>
    </form>

    <?php
    	if(isset($_POST['string']) && isset($_POST['submit']))
    	{
    		$string = isset($_POST['string']) ? $_POST['string'] : '';
    		echo strlen($string);
    	}
    ?>

</body>
</html>
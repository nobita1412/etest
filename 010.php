<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
 
<h1>1 . Viết ra 1 chương trình khi nhập vào họ tên của 1 người
    hãy in ra đâu là họ :
    đâu là tên :
    đâu là tên đệm .
    Ví dụ : nguyễn thị thuý diễm
    thì tên là diễm
    họ là nguyễn
    tên đệm là thị thuý
</h1>
<form method="POST" action="">
	<input type="text" name="name">
	<input type="submit" name="submit">
</form>

<?php
 	if (isset($_POST['name']) && isset($_POST['submit']))
 	{
 		$string = $_POST['name'];
 		//explode ( $delimiter , $string)
 		//mỗi phần tử của mảng được ngăn cách bởi $delimiter trong chuỗi
 		$arr = explode(' ', $string);
 		echo "Họ: " . $arr[0];
 		echo "<br> Tên đệm: ";
 		$dem = "";
 		for ($i = 1; $i<count($arr)-1; $i++)
 		{
 			$dem .= $arr[$i] . " ";
 		}
 		echo $dem;
 		echo "<br> Tên: " . $arr[count($arr)-1];
 	}
?>

</body>
</html>
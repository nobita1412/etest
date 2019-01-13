<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
 
<div>1 . Cho bạn 1 mảng
    $student = array(); <br>
    $student[] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7); <br>
    $student[] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8); <br>
    $student[] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9); <br>
    $student[] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7); <br>
    $student[] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1); <br>
    $student[] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3); <br>
    $student[] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5); <br>
    $student[] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8); <br>
    $student[] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9); <br>

    Hãy dùng dữ liệu sau và vòng lặp foreach để in ra 1 table thông tin của các sinh viên này
    và xếp loại của họ dự tên số điểm mà họ có
</div>

<?php
$student = array(); 
    $student[] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7); 
    $student[] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8); 
    $student[] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9); 
    $student[] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7);
    $student[] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1); 
    $student[] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3); 
    $student[] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5); 
    $student[] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8); 
    $student[] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9);


$count = count($student);
$new = array();
for ($i=0; $i<$count; $i++)
{
    $key = $student[$i]['name'] . "," . $student[$i]['age'] . "," . $student[$i]['point'];
    $value = $student[$i]['point'];
    $new["$key"] = $value;
}
asort($new);

$nsort = array();
foreach ($new as $key => $value) {
    $a = explode(",", $key);
    $nsort[] = array('name'=>"$a[0]", 'age'=>"$a[1]", 'point'=>"$a[2]");
}

echo "<table border='1px' cellspacing='0px'>";
echo "<tr>";
echo "<th>Họ tên</th>";
echo "<th>Tuổi</th>";
echo "<th>Điểm</th>";
echo "</tr>";
    foreach ($nsort as $ss) {
            echo "<tr>";
            echo "<td>".$ss['name']."</td>";
            echo "<td>".$ss['age']."</td>";
            echo "<td>".$ss['point']."</td>";
            echo "</tr>";
    }
echo "</table>";
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body> 

    <h1>1 . Viết 1 class PHP
    có tên là Student với các thuộc tính
    1 - tên
    2 - ngày tháng năm sinh ( định dạng dd/mm/YY )
    3 - quê quán
    4 - giới tính
    5 - điểm của sinh viên đó ( dạng mảng )
        ví dụ array(
            'toan' => 0,
            'ly' => 0,
            'hoa' => 0
        )
        đây khi là khai báo mặc định khi khởi tạo đối tượng sẽ truyền điểm vào
    Hãy khai báo các phương thức để in ra
    1 - tạo ra 1 method constructor cho phép truyển vào các thuộc tính của sinh viên
    2 - thông tin đầy đủ của sinh viên đó tên method là getFullInfo()
    3 - tuổi của sinh viên hiện tại getAgeStudent()
    4 - điểm trung bình 3 môn của sinh viên đó
    5 - xếp loại học tập ( > 8 giỏi , > 7 khá , > 5 trung bình , < 5 yếu kém</h1>

    Cuối cùng hãy khởi tạo đối tượng từ class này và truyền vào đầy đủ thông tin
sau đó lần lượt gọi các phương thức trong class mà bạn đã tạo

    <?php
        class Student
        {
            public $name;
            public $day;
            public $address;
            public $gender;
            public $marks = array();

            // public function __construct()
            // {

            // }

            public function constructor($name, $day, $address, $gender, $marks)
            {
                $this->name = $name;
                $this->day = $day;
                $this->address = $address;
                $this->gender = $gender;
                $this->marks = $marks;
            }

            public function getFullInfo()
            {
                echo "<br> Tên: " . $this->name;
                echo "<br> Ngày sinh: " . $this->day;
                echo "<br> Địa chỉ: " . $this->address;
                echo "<br> Giới tính: " . $this->gender;
                foreach ($this->marks as $key => $value)
                {
                    echo "<br>" .$key.": ".$value;
                }
            }

            public function getAgeStudent()
            {
                $yd = substr($day,6,4);
                $date = getdate();
                $yc = (int)$date['year'];
                $t = $yc - $yd;
                return $t;
            }

            public function avg()
            {
                $t = 0;
                foreach ($this->marks as $key => $value)
                {
                    $t += $value;
                }
                $avg = $t/(count($this->marks));
                return $avg;
            }

            public function xeploai()
            {
                $t = self::avg();
                $xl = "";
                if ($t > 8) $xl = "Giỏi";
                elseif ($t > 7) $xl = "Khá";
                elseif ($t > 5) $xl = "TB";
                else $xl = "Yếu";
                return $xl;
            }
        }

       $s = new Student();
       $a = array("Toán"=>"9", "Văn"=>"5", "Anh"=>"6");
       $s->constructor("Huy", "19/09/1997", "Hà Nội", "Nam",  array("Toán"=>"9", "Văn"=>"5", "Anh"=>"6"));
       $s->getFullInfo();
       echo "<br> Averange: " . $s->avg();
       echo "<br> Xếp loại: " . $s->xeploai();
    ?>

</body>
</html>
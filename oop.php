<?php
/*1. Bài tập Tạo lớp Hình chữ nhật:
Tạo một lớp HìnhChuNhat với các thuộc tính chiều dài và chiều rộng.
Tạo các phương thức để tính diện tích và chu vi của hình chữ nhật. */
class Retangcle {
    protected $length;
    protected $width;

    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }

    public function calArea()
    {
        return $this->length * $this->width;
    }

    public function calPerimeter()
    {
        return ($this->length + $this->width) *2;
    }
    
}

$length = 2;
$width = 10;
$Retangcle = new Retangcle($length, $width);
echo "Area of retangcle: " . $Retangcle->calArea() . "\n";
echo "Perimeter of retangcle: " . $Retangcle->calPerimeter();
/* 2. Bài tập Tạo lớp Điểm 2D:
Tạo một lớp Diem2D với các thuộc tính x và y.
Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.*/
class Point2D{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    public function calDistance(Point2D $point2D)
    {
        return sqrt(pow($this->x - $point2D->x,2)+pow($this->y - $point2D->y,2));
    }

}
/* 3. Bài tập Tạo lớp Mảng số nguyên:
Tạo một lớp MangSoNguyen với thuộc tính là một mảng các số nguyên.
Tạo các phương thức để tính tổng, trung bình, và phần tử lớn nhất của mảng.*/

class IntegerArr
{ 
    protected $arr; 
    public function __construct($arr) 
    { 
        $this->arr = $arr; 
    } 
    public function Sum() 
    { 
        return array_sum($this->arr); 
    } 
    public function Average() 
    { 
        $sum = $this->Sum(); 
        $count = count($this->arr); 
        return $sum / $count; 
    } 
    public function Max() 
    { 
        return max($this->arr); 
    }
}
$integerarr = new IntegerArr([2,4,1,3]);
echo "Tong la: ". $integerarr->Sum();
echo "<br>Trung binh: ". $integerarr->Average();
echo "<br>Max: ", $integerarr->Max();

/* 4. Bài tập Tạo lớp Đồng hồ:
Tạo một lớp DongHo với các thuộc tính giờ, phút và giây.
Tạo phương thức để hiển thị thời gian dưới định dạng "HH:MM:SS" và diễn tả chức năng tăng giây*/
class Clock
{
    protected $hour;
    protected $minute;
    protected $second;

    public function __construct($hour, $minute, $second){
        $this->hour=$hour;
        $this->minute=$minute;
        $this->second=$second;
    }
    public function IncreaseSecond()
    {
        $hour=$this->hour;
        $minute=$this->minute;
        $second=$this->second;
        return"$hour:$minute:$second";
    }
}
$clock=new Clock(10,03,03);
$clock->IncreaseSecond();
/* 5. Bài tập Tạo lớp Danh sách sinh viên:
Tạo một lớp SinhVien với các thuộc tính mã số, họ và tên.
Tạo lớp DanhSachSinhVien với các phương thức thêm sinh viên mới và hiển thị danh sách sinh viên.*/
class Student
    { 
        public $id; 
        public $name; 
        public function __construct($id, $name) 
        {
            $this->id = $id; 
            $this->name = $name; 
        }
    }
class StudentList
    { 
        public $student = []; 
        public function Create($student) 
        { 
            $this->student[] = $student;
        } 
        public function List() 
        { 
            foreach ($this->student as $student) 
            { 
            echo "<br>Mã số: " . $student->id;
            echo "<br>Họ và tên: " . $student->name; 
            }
        }
    }
$studentlist = new StudentList;
$studentlist->Create(new Student("1", "Nguyễn Văn A"));
$studentlist->Create(new Student("2", "Nguyễn Văn B"));
$studentlist->List();
/* 6. Bài tập Tạo lớp Xe hơi:
Tạo một lớp XeHoi với các thuộc tính là hãng xe, màu sắc và năm sản xuất.
Tạo phương thức để hiển thị thông tin đầy đủ của xe. */
class Car { 
    protected $brand; 
    protected $color; 
    protected $year; 
    public function __construct($brand, $color, $year) 
    {
        $this->brand = $brand; 
        $this->color = $color; 
        $this->year = $year; 
    } 
    public function showInfor() 
    {
         echo "Hãng xe: " . $this->brand; 
         echo "<br>Màu sắc: " . $this->color; 
         echo "<br>Năm sản xuất: " . $this->year; 
    }
}
$car = new Car("Toyota", "Đen", 2020);
$car->showInfor();
/* 7. Bài tập Tạo lớp Phân số:
Tạo một lớp PhanSo với các thuộc tính tử số và mẫu số.
Tạo các phương thức để thực hiện các phép toán cộng, trừ, nhân và chia giữa các phân số. */
class Fraction{
    protected $numerator;
    protected $denominator;

    public function __construct($numerator, $denominator)
    {
        $this->numerator= $numerator;
        $this->denominator=$denominator;
    }
    public function fractionAdd($otherFraction) 
    {
        $resultNumerator = ($this->numerator * $otherFraction->denominator) + ($this->denominator * $otherFraction->numerator);
        $resultDenominator = $this->denominator * $otherFraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function fractionSubtract($otherFraction) 
    {
        $resultNumerator = ($this->numerator * $otherFraction->denominator) - ($this->denominator * $otherFraction->numerator);
        $resultDenominator = $this->denominator * $otherFraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function fractionMultiply($otherFraction) 
    {
        $resultNumerator = $this->numerator * $otherFraction->numerator;
        $resultDenominator = $this->denominator * $otherFraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function fractionDivide($otherFraction) 
    {
        $resultNumerator = $this->numerator * $otherFraction->denominator;
        $resultDenominator = $this->denominator * $otherFraction->numerator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function getNumerator() 
    {
        return $this->numerator;
    }

    public function getDenominator() 
    {
        return $this->denominator;
    }
}
$frac1 = new Fraction(1,2);
$frac2 = new Fraction(3,4);

$result = $frac1->add($frac2);
echo "Addition: " . $result->getNumerator() . "/" . $result->getDenominator() . "\n";

$result = $frac1->subtract($frac2);
echo "Subtraction: " . $result->getNumerator() . "/" . $result->getDenominator() . "\n";

$result = $frac1->multiply($frac2);
echo "Multiplication: " . $result->getNumerator() . "/" . $result->getDenominator() . "\n";

$result = $frac1->divide($frac2);
echo "Division: " . $result->getNumerator() . "/" . $result->getDenominator();
/* 8. Bài tập Tạo lớp Người:
Tạo một lớp Nguoi với các thuộc tính tên, tuổi và địa chỉ.
Tạo phương thức để hiển thị thông tin người.*/
class Person {
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function showInfor() {
        return "Name: " . $this->name . "\n" . "Age: " . $this->age . "\n" . "Address: " . $this->address;
    }
}

$person = new Person("Truc Mai", 21, "Mai Dich");
echo $person->showInfor();
/*9. Bài tập Tạo lớp Sản phẩm:
Tạo một lớp SanPham với các thuộc tính tên, giá và mô tả.
Tạo phương thức để hiển thị thông tin chi tiết của sản phẩm. */
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) 
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function showInfor() {
        return "Name: " . $this->name . "\n" . "Price: $" . $this->price . "\n" . "Description: " . $this->description;
    }
}

$product = new Product("Shirt", 100.000, "abcdef");
echo $product->showInfor();
/*10.Bài tập Tạo lớp Đặt phòng khách sạn:
Tạo một lớp DatPhong voi các thuộc tính tên, ngày đến và số đêm ở lại.
Tạo phương thức để tính tổng số tiền cần thanh toán dựa trên giá phòng.*/
class HotelBooking {
    private $name;
    private $checkInDate;
    private $numOfNights;
    private $roomPrice;

    public function __construct($name, $checkInDate, $numOfNights, $roomPrice) 
    {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numOfNights = $numOfNights;
        $this->roomPrice = $roomPrice;
    }

    public function calculateTotalPayment() 
    {
        return $this->numOfNights * $this->roomPrice;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getCheckInDate() 
    {
        return $this->checkInDate;
    }

    public function getNumOfNights() 
    {
        return $this->numOfNights;
    }

    public function getRoomPrice() 
    {
        return $this->roomPrice;
    }
}

$name = "Truc Mai";
$checkInDate = "2023-07-05";
$numOfNights = 2;
$roomPrice = 100.000;

$HotelBooking = new HotelBooking($name, $checkInDate, $numOfNights, $roomPrice);

echo "Customer: " . $HotelBooking->getName() . "\n";
echo "Check-in Date: " . $HotelBooking->getCheckInDate() . "\n";
echo "Number of Nights: " . $HotelBooking->getNumOfNights() . "\n";
echo "Room Price: " . $HotelBooking->getRoomPrice() . "\n";
echo "Total Payment: " . $HotelBooking->calculateTotalPayment();
?>
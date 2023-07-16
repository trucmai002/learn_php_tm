<?php
//ABSTRACT
/*1. Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng là "calculateArea". 
Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) kế thừa từ lớp Shape và triển khai phương thức calculateArea cho từng hình.*/
abstract class Shape{
    abstract public function calculateArea();
}
class Circle extends Shape{
    protected $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function calculateArea(){
        $area= pi()*pow($this->radius,2);
        echo $area;
    }
}
class Rectangle extends Shape{
    protected $length;
    protected $width;
    public function __construct($length, $width){
        $this->length=$length;
        $this->width=$width;
    }
    public function calculateArea(){
        return $this->length * $this->width;
    }
}
$circle=new Circle(5);
$circle->calculateArea();
$rectangle=new Rectangle(10,5);
$rectangle->calculateArea();
/*2. Tạo một abstract class "Animal" (Động vật) với một phương thức trừu tượng là "makeSound". 
Tạo các lớp con "Dog" (Chó) và "Cat" (Mèo) kế thừa từ lớp Animal và triển khai phương thức makeSound theo cách riêng của từng loại động vật.*/
abstract class Animal{
    abstract public function makeSound();
}
class Dog extends Animal{
    public function makeSound(){
        return "Burk";
    }
}
class Cat extends Animal{
    public function makeSound(){
        return "Meow";
    }
}
$dog= new Dog();
$cat= new Cat();
echo "Tiếng chó: ";
echo $dog->makeSound(). "<br>";
echo "Tiếng mèo: ";
echo $cat->makeSound();

/*3.Tạo một abstract class "Employee" (Nhân viên) với các thuộc tính trừu tượng như "name" (tên) và "salary" (mức lương), 
có một phương thức trừu tượng là "getInformation". Tạo các lớp con "Manager" (Quản lý) và "Staff" (Nhân viên) kế thừa từ lớp Employee 
và triển khai các thuộc tính và phương thức theo cách riêng của từng lớp.*/
abstract class Employee{
    protected $name;
    protected $salary;
    public function setName($name){
        $this->name = $name;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    abstract public function getInformation();
}
class Manager extends Employee{
    public function getInformation(){
        return ['nameManager' => $this->name, 'salaryManager'=> $this->salary];
    }
}
class Staff extends Employee{
    public function getInformation(){
        return ['nameStaff'=>$this->name, 'salaryStaff' => $this->salary];
    }
}
$manager= new Manager();
$manager->setName("Nguyễn Minh Tuấn");
$manager->setSalary("10.000.000");
print_r($manager->getInformation());
$staff= new Staff();
$staff->setName("Nguyễn Hồng Hạnh");
$staff->setSalary("1.000.000");
print_r($staff->getInformation());

/*4. Tạo một abstract class "Vehicle" (Phương tiện) với một phương thức trừu tượng là "start". 
Tạo các lớp con "Car" (Xe hơi) và "Motorcycle" (Xe máy) kế thừa từ lớp Vehicle và triển khai 
phương thức start theo cách riêng của từng loại phương tiện.*/
abstract class vehicle{
    abstract public function start();
}
class car extends vehicle{
    public function start(){
        return "4 bánh";
    }
}
class motorcycle extends vehicle{
    public function start(){
        return "2 bánh";
    }
}
$car=new car();
echo "Xe hơi: ";
echo $car->start() ."<br>";
$motor=new motorcycle();
echo "Xe máy: ";
echo $motor->start() . "<br>";

/*5. Tạo một abstract class "Database" (Cơ sở dữ liệu) với các phương thức trừu tượng như "connect", 
"query" và "disconnect". Tạo các lớp con "MySQLDatabase" và "PostgreSQLDatabase" kế thừa từ lớp Database 
và triển khai các phương thức theo cách riêng của từng loại cơ sở dữ liệu.*/
abstract class Database {
    abstract public function connect();
    abstract public function query($query, $params = []);
    abstract public function disconnect();
}
class MySQLDatabase extends Database {
	
        public	$isConn;
        protected	$datab;
        
        //CONNECT TO DB
        public	function connect($host = "localhost", $user = "root", $pass = "", $dbname = "deha", $options = [])
        {
            $this->isConn = TRUE;
            try {
                $this->datab = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass, $options);
                $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e){
                throw new Exception($e->getMessage());
            }
        }
        
        public function disconnect()
        {
            $this->isConn = FALSE;
            $this->datab = NULL;
        }
        
        public function query($query, $params = [])
        {
            try {
                $stmt = $this->datab->prepare($query);
                $stmt->execute($params);
                return TRUE;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

//INTERFACE
/*Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". 
Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật.*/
interface Resizable{
    public function resize($percent);
}
class Rectangle implements Resizable {
    protected $length;
    protected $width;

    public function __construct($length, $width){
        $this->length=$length;
        $this->width=$width;
    }
    public function resize($percent){
        $this->length=$this->length*$percent/100;
        $this->width=$this->width*$percent/100;
    }
    public function getWidth(){
        return $this->width;
    }
    public function getLength(){
        return $this->length;
    }
}
$rectangle= new Rectangle(10,5);
echo "Chiều rộng ban đầu: ". $rectangle->getWidth() .  "<br>";
echo "Chiều dài ban đầu: ". $rectangle->getLength() . "<br>";
$rectangle->resize(200);
echo "Chiều rộng sau khi resize: ". $rectangle->getWidth() .  "<br>";
echo "Chiều dài sau khi resize: ". $rectangle->getLength();

/*Tạo một interface "Logger" với các phương thức "logInfo", "logWarning" và "logError". 
Tạo một lớp "FileLogger" (Ghi log vào file) và một lớp "DatabaseLogger" (Ghi log vào cơ sở dữ liệu) và triển khai interface Logger cho cả hai lớp.*/
interface Logger {
    public function logInfo($message);
    public function logWarning($message);
    public function logError($message);
}

class FileLogger implements Logger {
    public function logInfo($message) {
        $this->writeToFile("[INFO] " . $message);
    }

    public function logWarning($message) {
        $this->writeToFile("[WARNING] " . $message);
    }

    public function logError($message) {
        $this->writeToFile("[ERROR] " . $message);
    }

    private function writeToFile($message) {
        $file = fopen("log.txt", "a");
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

class DatabaseLogger implements Logger {
    public function logInfo($message) {
        $this->saveToDatabase("INFO", $message);
    }

    public function logWarning($message) {
        $this->saveToDatabase("WARNING", $message);
    }

    public function logError($message) {
        $this->saveToDatabase("ERROR", $message);
    }
}

$fileLogger = new FileLogger();
$fileLogger->logInfo("Thông tin log");
$fileLogger->logWarning("Cảnh báo log");
$fileLogger->logError("Lỗi log");


$databaseLogger = new DatabaseLogger();
$databaseLogger->logInfo("Thông tin log");
$databaseLogger->logWarning("Cảnh báo log");
$databaseLogger->logError("Lỗi log");


/*Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw". 
Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable và triển khai phương thức draw cho mỗi hình.*/
interface Drawable {
    public function Draw();
}
class Circle implements Drawable {
    public function Draw() {
        return "Drawing a circle";
    }
}

class Square implements Drawable {
    public function Draw() {
        return "Drawing a square";
    }
}


$circle = new Circle();
$circle->Draw();

$square = new Square();
$square->Draw();
/*Tạo một interface "Sortable" với phương thức "sort". 
Tạo một lớp "ArraySorter" (Sắp xếp mảng) và một lớp "LinkedListSorter" (Sắp xếp danh sách liên kết) và triển khai interface Sortable cho cả hai lớp.*/
interface Sortable {
    public function sort(array $data);
}

class ArraySorter implements Sortable {
    public function sort(array $data) {
        sort($data);
        return $data;
    }
}

class LinkedListSorter implements Sortable {
    public function sort(array $data) {
        return $data;
    }
}

$arraySorter = new ArraySorter();
$data = [4, 2, 8, 1, 5];
$sortedData = $arraySorter->sort($data);
print_r($sortedData);

$linkedListSorter = new LinkedListSorter();
$sortedData = $linkedListSorter->sort($data);
print_r($sortedData);

/*Tạo một interface "Encryptable" (Có thể mã hóa) với phương thức "encrypt" và "decrypt". 
Tạo một lớp "AES" và một lớp "DES" kế thừa từ interface Encryptable và triển khai các phương thức theo thuật toán mã hóa tương ứng. */
interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    public function encrypt($data) {
        $encryptedData = "AES: " . $data;
        return $encryptedData;
    }

    public function decrypt($encryptedData) {
        $data = str_replace("AES: ", "", $encryptedData);
        return $data;
    }
}

class DES implements Encryptable {
    public function encrypt($data) {
        $encryptedData = "DES: " . $data;
        return $encryptedData;
    }

    public function decrypt($encryptedData) {
        $data = str_replace("DES: ", "", $encryptedData);
        return $data;
    }
}

$aes = new AES();
$data = "Sensitive data";
$encryptedData = $aes->encrypt($data);
echo "Encrypted data: " . $encryptedData . "\n";

$decryptedData = $aes->decrypt($encryptedData);
echo "Decrypted data: " . $decryptedData . "\n";
?>
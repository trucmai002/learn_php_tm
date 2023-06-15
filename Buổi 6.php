<?php
//BÀI 1 
//1 tạo bảng 
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "CREATE TABLE customers (
        id INT PRIMARY KEY,
        name VARCHAR(255),
        email VARCHAR(255),
        phone VARCHAR(255)
    )";
    $result = mysqli_query($dbh,$sql_stmt); 
    if (!$result) {
        die("Lỗi: " . mysqli_error());
    } else {
        echo "tạo bảng thành công";
    }
    
    mysqli_close($dbh);
 //   2 insert
    $dbh= mysqli_connect('localhost','root','');
    if(!$dbh)
    die("Kết nối thất bại".mysqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die("Lỗi: ".mysqli_error());
    $sql_stmt="INSERT INTO customers (id,name, email,phone)
    values ('1','nguyen thi a','a@gmail.com','0123456789'),
    ('2','hoang van b','a@gmail.com','0123456789'),
    ('3','pham thi b','example@gmail.com','0123456789'),
    ('4','vu thi c','example@gmail.com','0123456789'),
    ('5','nguyen van d','a@gmail.com','0123456789')
    ";
    $result=mysqli_query($dbh, $sql_stmt);
    if (!$result) {
        die("Lỗi: " . mysqli_error());
    } else {
        echo "Insert thành công";
    }
    
    mysqli_close($dbh);
//3 update
    $dbh= mysqli_connect('localhost','root','');
    if(!$dbh)
    die("Kết nối thất bại".mysqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die("Lỗi: ".mysqli_error());
    $sql_stmt = "UPDATE `customers` SET `name` = 'abcdef' WHERE `id` = '1'";
    $result = mysqli_query($dbh,$sql_stmt);
    if (!$result) {
        die("Lỗi: " . mysqli_error());
    } else {
        echo "update thành công";
    }
    mysqli_close($dbh);
//4 delete
    $dbh= mysqli_connect('localhost','root','');
    if(!$dbh)
    die("Kết nối thất bại".mysqli_error());
    if(!mysqli_select_db($dbh, 'product'))
    die("Lỗi: ".mysqli_error());    
    $sql_stmt = "DELETE FROM `customers` WHERE `id` = '5'"; 
    $result = mysqli_query($dbh,$sql_stmt);
    if (!$result) {
        die("Lỗi: " . mysqli_error());
    } else {
        echo "xóa thành công";
    }
    mysqli_close($dbh);

//5 SELECT
    $dbh= mysqli_connect('localhost','root','');
    if(!$dbh)
    die("Kết nối thất bại".mysqli_error());
    if(!mysqli_select_db($dbh, 'product'))
    die("Lỗi: ".mysqli_error());    
    $sql_stmt = "SELECT * FROM customers WHERE email='example@gmail.com'"; 
    $result = mysqli_query($dbh,$sql_stmt);
    if (!$result)     
        die("Database access failed: " . mysqli_error()); 
    $rows = mysqli_num_rows($result); 
    echo "Các khách hàng có email example@gmail.com: <br>";
    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {
        echo "ID: " . $row["id"] . ", Name: " . $row["name"] . ", Email: " . $row["email"] . ", Phone: " . $row["phone"] . "<br>";
    }}
    mysqli_close($dbh);*/
//6 create
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "CREATE TABLE orders(
        id int AUTO_INCREMENT primary key,
        customer_id varchar(20) not null,
        total_amount float not null,
        order_date date not null
    )";
    $result = mysqli_query($dbh,$sql_stmt); 
    if (!$result) {
        die("Lỗi: " . mysqli_error());
    } else {
        echo "tạo bảng thành công";
}
mysqli_close($dbh);
//7 insert
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "INSERT INTO orders (customer_id, total_amount, order_date)
    VALUES (3, 100.00, '2023-06-07')";
    $result = mysqli_query($dbh,$sql_stmt); 
    if (!$result) {
        die("Lỗi: " . mysqli_error());
    } else {
        echo "tạo bảng thành công";
    }
    mysqli_close($dbh);
//8 select
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "SELECT * FROM orders WHERE customer_id = 3";
    $result = mysqli_query($conn, $sql_stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "Đơn hàng của khách hàng id=3:<br>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] ."<br>". "Customer ID: " . $row["customer_id"] ."<br>". "Total Amount: " . $row["total_amount"] ."<br>". "Order Date: " . $row["order_date"] . "<br>";
    }
    } else {
    echo "Không tìm thấy đơn hàng của khách hàng id=3<br>";
    }
    mysqli_close($dbh);
//9 select
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt =  "SELECT customers.id, customers.name, orders.id AS order_id, orders.total_amount, orders.order_date
    FROM customers
    JOIN orders ON customers.id = orders.customer_id";

    $result = mysqli_query($conn, $sql_stmt);

    if (mysqli_num_rows($result) > 0) {
    echo "Danh sách khách hàng và đơn hàng của họ:<br>";
    while ($row = mysqli_fetch_assoc($result)) {
    echo "Customer ID: " . $row["id"] ."<br>". "Customer Name: " . $row["name"] ."<br>". "Order ID: " . $row["order_id"] ."<br>". "Total Amount: " ."<br>". $row["total_amount"] . "Order Date: " ."<br>". $row["order_date"] . "<br>";
    }
    } else {
    echo "Không tìm thấy khách hàng và đơn hàng của họ <br>";
    }
    mysqli_close($dbh);
//10 select
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt =  "SELECT DISTINCT email FROM customers";
    $result = mysqli_query($conn, $sql_stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "Danh sách email khách hàng:<br>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Email: " . $row["email"] . "<br>";
    }
    } else {
    echo "Không tìm thấy email khách hàng<br>";
    }
    mysqli_close($dbh);

//BÀI 2
//1 create table
    //bang KHACHHANG
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmtKH = "CREATE TABLE KHACHHANG (
        MAKH char(4) PRIMARY KEY,
        HOTEN VARCHAR(255),
        DCHI VARCHAR(255),
        SDT VARCHAR(20),
        NSINH DATE,
        DOANHSO FLOAT,
        NDK DATE
    )";
    
    if (mysqli_query($conn, $sql_stmtKH)) {
        echo "Tạo bảng thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    //bang NHANVIEN
    $sql_stmtNV = "CREATE TABLE NHANVIEN (
        MANV char(4) PRIMARY KEY,
        HOTEN VARCHAR(255),
        NVL DATE,
        SDT VARCHAR(20)
    )";
    
    if (mysqli_query($conn, $sql_stmtNV)) {
        echo "Tạo bảng thành công<br>";
    } else {
        echo "Lỗi " . mysqli_error($conn) . "<br>";
    }
    //bang SANPHAM
    $sql_stmtSP = "CREATE TABLE SANPHAM (
        MASP char(4) PRIMARY KEY,
        TENSP VARCHAR(255),
        DVT VARCHAR(20),
        NUOCSX VARCHAR(255),
        GIA DECIMAL(10, 2)
    )";
    
    if (mysqli_query($conn, $sql_stmtSP)) {
        echo "Tạo bảng thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    //bang HOADON
    $sql_stmtHD = "CREATE TABLE HOADON (
        SOHD int PRIMARY KEY,
        NHD DATE,
        MAKH char(4),
        MANV char(4),
        GIA DECIMAL(10, 2),
        FOREIGN KEY (MAKH) REFERENCES KHACHHANG(MAKH) ON DELETE CASCADE,
        FOREIGN KEY (MANV) REFERENCES NHANVIEN(MANV) ON DELETE CASCADE
    )";
    
    if (mysqli_query($conn, $sql_stmtHD)) {
        echo "Tạo bảng thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    //bang CTHD
    $sql_stmtCTHD = "CREATE TABLE CTHD (
        SOHD int,
        MASP char(4),
        SL int,
        PRIMARY KEY (SOHD, MASP),
        FOREIGN KEY (SOHD) REFERENCES HOADON(SOHD) ON DELETE CASCADE,
        FOREIGN KEY (MASP) REFERENCES SANPHAM(MASP) ON DELETE CASCADE
    )";
    
    if (mysqli_query($conn, $sql_stmtCTHD)) {
        echo "Tạo bảng thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    
    mysqli_close($dbh);
// insert
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    //insert KHACHHANG
     $sql_stmtKH = "INSERT INTO `KHACHHANG`(`MAKH`, `HOTEN`, `DCHI`, `SDT`, `NSINH`, `DOANHSO`, `NDK`) VALUES
        ('KH01','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM','08823451','1960-10-22','13,060,000','2006-07-22'),
        ('KH02','Tran Ngoc Han','23/5 Nguyen Trai, Q5, TpHCM','0908256478','1974-04-03','280,000','2006-07-30'),
        ('KH03','Tran Ngoc Linh','45 Nguyen Canh Chan, Q1, TpHCM','0938776266','1980-06-12','3,860,000','2006-08-05'),
        ('KH04','Tran Minh Long','50/34 Le Dai Thanh, Q10, TpHCM','0917325476','1965-03-09','250,000','2006-10-20'),
        ('KH05','Le Nhat Minh','30 Truong Dinh, Q3, TpHCM','08246108','1950-03-10','21,000','2006-10-28'),
        ('KH06','Le Hoai Thuong','227 Nguyen Van Cu, Q5, TpHCM','08631738','1981-12-31','915,000','2006-11-24'),
        ('KH07','Nguyen Van Tam','32/3 Tran Binh Trong, Q5, TpHCM','0916783565','1971-06-04','12,500','2006-06-01'),
        ('KH08','Phan Thi Thanh','45/2 Nguyen Hue, Q1, TpHCM','0938435756','1972-01-10','450,000','2006-12-01'),
        ('KH09','Le Ha Vinh ','873 Nguyen Trai, Q5, TpHCM','0938435757','1973-02-11','650,000','2007-01-01'),
        ('KH10','Ha Huy Lap','34/34B Nguyen Canh Chan, Q1, TpHCM','0938435758','1974-03-12','850,000','2007-01-02');";

    if (mysqli_query($conn, $sql_stmtKH )) {
        echo "Thêm dữ liệu thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    //insert NHANVIEN
    $sql_stmtNV = "INSERT INTO NHANVIEN (MANV, HOTEN, NVL, SDT) VALUES
        ('NV01', 'Nguyen Nhu Nhut', '2006-04-13', '0927345678'),
        ('NV02', 'Le Thi Phi Yen', '2006-04-21', '0987567390'),
        ('NV03', 'Nguyen Van B', '2006-04-27', '0997047382'),
        ('NV04', 'Ngo Thanh Tuan', '2006-04-24', '0913758498'),
        ('NV05', 'Nguyen Thi Truc Thanh', '2006-07-20', '0918590387');";

    if (mysqli_query($conn, $sql_stmtNV)) {
        echo "Thêm dữ liệu thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    //insert  SANPHAM
    $sql_stmtSP= "INSERT INTO SANPHAM (MASP,TENSP, DVT, NUOCSX, GIA) VALUES
        ('SP01','But chi', 'cay', 'Viet Nam', '50,000'),
        ('SP02','But chi', 'hop', 'Viet Nam', '12,000'),
        ('SP03','But bi', 'cay', 'Viet Nam', '3,000'),
        ('SP04','But bi', 'hop', 'Trung Quoc', '400,000'),
        ('SP05','But bi', 'hop', 'Trung Quoc', '50,500'),
        ('SP06','Tap 100 giay mong', 'quyen', 'Trung Quoc', '60,500'),
        ('SP07','Tap 100 giay mong', 'quyen', 'Viet Nam', '70,000'),
        ('SP08','Tap 200 giay mong', 'quyen', 'Viet Nam', '88,000'),
        ('SP09','Tap 200 giay mong', 'chuc', 'Viet Nam', '99,000'),
        ('SP10','Tap 200 giay mong', 'chuc', 'Viet Nam', '100,500');";

    if (mysqli_query($conn, $sql_stmtSP)) {
        echo "Thêm dữ liệu thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    //insert HOADON
    $sql_stmtHD = "INSERT INTO HOADON (SOHD, NHD, MAKH, MANV, GIA) VALUES
        (1, '2023-06-15', 'KH01', 'NV01', 100000),
        (2, '2023-06-16', 'KH02', 'NV02', 200000),
        (3, '2023-06-17', 'KH03', 'NV03', 300000),
        (4, '2023-06-18', 'KH04', 'NV04', 400000),
        (5, '2023-06-19', 'KH05', 'NV04', 500000),
        (6, '2023-06-20', 'KH06', 'NV03', 600000),
        (7, '2023-06-21', 'KH07', 'NV02', 700000),
        (8, '2023-06-22', 'KH08', 'NV01', 800000);";

    if (mysqli_query($conn, $sql_stmtHD)) {
        echo "Thêm dữ liệu thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    //insert CTHD
    $sqlInsertCTHD = "INSERT INTO CTHD (SOHD, MASP, SL) VALUES
        (1,'SP01', 10),
        (1,'SP05', 12),
        (2,'SP09', 5),
        (2,'SP01', 6),
        (3,'SP01', 6),
        (4,'SP03', 10),
        (4,'SP03', 20),
        (4,'SP09', 3),
        (5,'SP07', 2),
        (5,'SP10', 10),
        (5,'SP10', 10),
        (5,'SP08', 19),
        (6,'SP05', 5),
        (7,'SP05', 5),
        (8,'SP06', 1)";

    if (mysqli_query($conn, $sqlInsertCTHD)) {
        echo "Thêm dữ liệu thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
//2 them thuoc tinh
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "ALTER TABLE SANPHAM ADD COLUMN GHICHU VARCHAR(20)";

    if (mysqli_query($conn, $sql_stmt)) {
        echo "Thêm thuộc tính thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
//3 thêm thuộc tính
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "ALTER TABLE KHACHHANG ADD COLUMN LOAIKH TINYINT";

    if (mysqli_query($conn, $sql_stmt)) {
        echo "Thêm thuộc tính thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
//4 update
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "UPDATE KHACHHANG SET HOTEN = 'Nguyễn Văn B' WHERE MAKH = 'KH01'";

    if (mysqli_query($conn, $sql_stmt)) {
        echo "Cập nhật thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
//5 update
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "UPDATE KHACHHANG SET HOTEN = 'Nguyễn Văn Hoan' WHERE MAKH = 'KH09' AND YEAR(NDK) = 2007";

    if (mysqli_query($conn, $sql_stmt)) {
        echo "Cập nhật thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
//6 alter
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "ALTER TABLE SANPHAM MODIFY COLUMN GHICHU VARCHAR(100)";
    if (mysqli_query($conn, $sql_stmt)) {
        echo "Sửa thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
//7 delete
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "ALTER TABLE SANPHAM DROP COLUMN GHICHU";
    if (mysqli_query($conn, $sql_stmt)) {
        echo "Xóa thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
//8 delete
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "DELETE FROM KHACHHANG WHERE YEAR(NSINH) = 1971";
    if (mysqli_query($conn, $sql_stmt)) {
        echo "Xóa thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
//9 delete
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sql_stmt = "DELETE FROM KHACHHANG WHERE YEAR(NSINH) = 1971 AND YEAR(NDK) = 2006";
    if (mysqli_query($conn, $sql_stmt)) {
        echo "Xóa thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
//10 delete
    $dbh = mysqli_connect('localhost', 'root', '');
    if (!$dbh)
    die ("Kết nối thất bại:".msqli_error());
    if(!mysqli_select_db($dbh, 'customer'))
    die ("Lỗi: ". mysql_error());
    $sqlDeleteHoaDonKH01 = "DELETE FROM HOADON WHERE MAKH = 'KH01'";
    if (mysqli_query($conn, $sql_stmt)) {
        echo "Xóa thành công<br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
    mysqli_close($dbh);
?>
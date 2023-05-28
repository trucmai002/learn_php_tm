<?php
//1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function evenNum($input){
    if($input%2==0)
        echo"Yes";
    else    
        echo "No";
}
echo "Bài 1: ";
echo evenNum(4);
echo "<br>";
//2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function totalNum($n){
    $total=0;
    for($x=1; $x<=$n; $x++){
        $total=$total+$x;
    }
    return $total;
};
echo "Bài 2: ";
echo totalNum(9);
echo "<br>";
//3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function multiTable(){
    for ($x=1; $x<=10; $x++){
        for ($y=1; $y <= 10; $y++){
            $multi= $x * $y;
            echo "$x*$y= $multi <br>";
        }
        echo "<br>";
    }
}
    echo "Bài 3: ";
    echo multiTable();
    echo "<br>";
//4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function findWord( $string, $word){
 if(strpos($string, $word) == true){
    echo "Chuỗi $string có chứa từ $word";
} else{
    echo "Chuỗi $string không chứa từ $word";
}}
echo "Bài 4:";
echo findWord("nguyen truc mai", "mai");
echo "<br>";
//5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.

function minMax($x, $y, $z, $g){
    $abc=array($x, $y, $z, $g);
    for($a=0; $a<count($abc)-1; $a++){
        if ($abc[$a]<$abc[$a+1]){
            $min=$abc[$a];
            $max=$abc[$a+1];}
        else {
            $min=$abc[$a+1];
            $max=$abc[$a];}
    };
    echo "<br>Min: $min";
    echo "<br> Max: $max";
}
echo "Bài 5:";
echo minMax(10,5,4,15);
echo "<br>";
//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortArr($x, $y, $z, $g){
    $abc=array($x, $y, $z, $g);
    sort($abc);
    foreach( $abc as $a) {
        echo "$a <br>";
    }
}
echo "Bài 6: <br>";
echo sortArr(10,5,4,15);
echo "<br>";
//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorialNum($n){
    $total=1;
    for($x=1; $x<=$n; $x++){
        $total=$total*$x;
    }
    return $total;
};
echo "Bài 7: ";
echo factorialNum(4);
echo "<br>";
//8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function checkPrime($n)
{
    if($n<=0)
        return false;
    else{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
    
}}
function arrayPrimes($a, $b)
{
    for($n=$a; $n<=$b; $n++){
        if(checkPrime($n))
            echo "$n ";
    } 
    }
echo "Bài 8: ";
echo arrayPrimes(3,10);
echo "<br>";
//9.Viết chương trình PHP để tính tổng của các số trong một mảng.
function totalArr($x, $y, $z, $g){
    $abc=array($x, $y, $z, $g);
    $total=0;
    for($x=0; $x<count($abc); $x++){
        $total=$total+$abc[$x];
    }
    return $total;
}
echo "Bài 9:";
echo totalArr(10,5,4,15);
echo "<br>";
//10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
    $a0 = 0;
    $a1 = 1;
    $an = 1;
    if ($n < 0) {
        echo "n phải lớn hơn hoặc bằng 0";
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $a0 = $a1; 
            $a1 = $an; 
            $an = $a0 + $a1; 
        }
    }
    return $an;
}
echo "Bài 10:";
for($i = 0; $i < 5; $i ++) {
    echo (fibonacci ( $i ) . " ");
}
echo "<br>";

//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function armstrong($n){
    $count=0;
    $x=$n;
    while($x>1)
    {
        $x=$x/10;
        $count++;
    }
    $a=$n;
    $sum=0;
    while($a>0)
    {
        $x=$a%10;
        $sum+=pow($x, $count);
        $a=$a/10;
        $a=(int)$a;
    }
    if($n==$sum)  
        echo " $n là số armstrong";  
    else  
        echo" $n không phải số armstrong";
}
echo "Bài 11:";
echo armstrong(153);
echo "<br>";

//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
$abc=array(1,2,3,4,5,6,7,8,9);
function insertArr($input, $n){
    $abc=array(1,2,3,4,5,6,7,8,9);
    array_splice($abc, $n, 0, $input);
    print_r($abc);
}
echo "Bài 12:";
echo insertArr(1000,8);
echo "<br>";
//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function repeatArr($x, $y, $z, $u, $t){
    $a=array($x, $y, $z, $u, $t);
    print_r(array_unique($a));
}
echo "Bài 13:";
echo repeatArr(1,2,3,1,4);
echo "<br>";

//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function locaArr($x){
    $a=array(2,4,6,3,5,7);
    for($i=0; $i<count($a); $i++){
        if($a[$i]==$x)
            echo "Vị trí: ".$i;
    }
}
echo "Bài 14: ";
echo locaArr(5);
echo "<br>";

//15.Viết chương trình PHP để đảo ngược một chuỗi.
function reverStr($input){
    return strrev($input);
}
echo"<br> Bài 15: ";
echo reverStr("abcdv");

//16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countArr($x, $y, $z){
    $arr = array($x, $y, $z);
    return count($arr);
}
echo"<br> Bài 16: ";
echo countArr("1", "2", "9");
echo "<br>";

//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function checkPalindrome($input){
    if ($input==strrev($input))
        echo "$input là chuỗi palindrome";
    else    
        echo"$input không phải chuỗi palindrome";
}
echo"<br> Bài 17: ";
echo checkPalindrome("abccba");
echo "<br>";

//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccur($x, $y, $z, $u, $t, $input){
    $arr = array($x, $y, $z, $u, $t);
    $count=0;
    for($i=0; $i< count($arr); $i++){
        if($arr[$i]==$input)
            $count++;
    }
    return $count;
}
echo"<br> Bài 18: ";
echo countOccur(1,2,2,6,2,2);
echo "<br>";

//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function rsortArr($x, $y, $z, $u, $t){
    $arr = array($x, $y, $z, $u, $t);
    rsort($arr);
    foreach($arr as $value){
        echo"$value ";
    }
}
echo"<br> Bài 19: ";
echo rsortArr(3,5,2,6,6);
echo "<br>";

//20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function insertArr1($x, $y, $z, $u, $t,$input, $vitri){
    $arr = array($x, $y, $z, $u, $t);
    if($vitri=="dau"){
        echo "Thêm vào đầu: ";
        array_splice($arr,0,0,$input);}
    else{
    echo "Thêm vào cuối: ";
    $arr[]=$input;}
    print_r($arr);
}
echo"<br> Bài 20: ";
echo insertArr1(2,7,3,4,6,100,"cuoi");
echo "<br>";

//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function secondMax($x, $y, $z, $u, $t){
    $a= array($x, $y, $z, $u, $t);
    $max=0;
    $b=0;
    for($i=1; $i<count($a); $i++){
        if ($max<$a[$i])
            $max=$a[$i];
        }
    for($i=1; $i<count($a); $i++){
        if ($max==$a[$i])
            continue;
        else if ($b<$a[$i])
            $b=$a[$i];
        }
    echo "Số lớn thứ 2 là: $b";
}
echo"<br> Bài 21: ";
echo secondMax(2,7,3,4,6);
echo "<br>";

//22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function divisorMultiple($a, $b){
    $ucln=0;
    $x=$a; $y=$b;
    if ($a<=0 || $b<=0 || $a<$b)
        echo "Phải nhập số nguyên dương và số thứ nhất phải lớn hơn số thứ 2";
    else{
        while ($a!=0 && $b!=0){
            if($a>$b)
                {$maxDivi=$b;
                $a=$a%$b;}
            else
                {$maxDivi=$a;
                $b=$b%$a;}
        };
     echo "<br>Ước chung lớn nhất là: $maxDivi <br>";
     $minMulti=$x*$y/$maxDivi;
     echo "Bội chung nhỏ nhất là: $minMulti";
}}
echo"<br> Bài 22: ";
echo divisorMultiple(32,16);
echo "<br>";

//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function perfectNum($x){
    $total=0;
    if($x<=0)
        echo"không phải số hoàn hảo";
    else{
    for($i=1; $i<$x; $i++)
    {
        if($x%$i==0)
            $total=$total+$i;
    }
    if($total==$x)
        echo"$n là số hoàn hảo";
    else    
        echo "$n không phải số hoàn hảo";
}}
echo"<br> Bài 23: ";
echo perfectNum(0);
echo "<br>";

//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function maxOdd($x, $y, $z, $g){
    $abc=array($x, $y, $z, $g);
    for($a=0; $a<count($abc)-1; $a++){
        if ($abc[$a]<$abc[$a+1] && $abc[$a+1]%2!=0){
            $max=$abc[$a+1];}
        else if ($abc[$a]>$abc[$a+1] && $abc[$a+1]%2!=0){
            $max=$abc[$a];}
    };
    echo "<br> số lẻ lớn nhất: $max";
}
echo "Bài 24: ";
echo maxOdd(10,5000,37,15);
echo "<br>";

//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function checkPrime1($n)
{
    if($n<=0)
        return false;
    else{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}}
echo "Bài 25: ";
if(checkPrime1(0))
    echo "Là số nguyên tố";
else
    echo "Không phải số nguyên tố";
echo "<br>";

//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function maxPositive($x, $y, $z, $u, $t){
    $arr = array($x, $y, $z, $u, $t);
    $max=0;
    for($i=0; $i<count($arr)-1; $i++){
        if ($arr[$i]<$arr[$i+1] && $arr[$i+1]>0)
            $max=$arr[$i+1];
        else if ($arr[$i]>$arr[$i+1] && $arr[$i]>0)
            $max=$arr[$i];
    }
    if ($max==0)
        echo "Mảng toàn số âm";
    else
        echo "<br> Số dương lớn nhất là: $max";
}
echo "Bài 26: ";
echo maxPositive(2,3,0,-8,5);
echo "<br>";

//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function maxNegative($x, $y, $z, $u, $t){
    $arr = array($x, $y, $z, $u, $t);
    $b=array();
    for($i=0; $i<count($arr); $i++){
        if($arr[$i]<0)
            $b[]=$arr[$i];}
    if (count($b)==0)
        echo "Mảng toàn số dương";
    else {
        $max=$b[0];
        for($i=0; $i<count($b); $i++){
            if ($max<$b[$i])
                $max=$b[$i];
        }
        echo "<br> Số âm lớn nhất là: $max";
}}
echo "Bài 27: ";
echo maxNegative(2,-3,0,-9,5);
echo "<br>";

//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function totalOdd($n){
    $total=0;
    for($i=1; $i<=$n; $i++){
        if($i%2!=0){
            $total+=$i;
        }
    }
    echo "Tổng số lẻ từ 1 đến $n là $total";
}
echo "Bài 28: ";
echo totalOdd(9);
echo "<br>";

//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function perfSquare($a, $b){
    $arr=array();
    for($n=$a; $n<=$b; $n++){
        $sqrt=sqrt($n);
        if ($sqrt==floor($sqrt)) { 
          $arr[]=$n;
        }}
    foreach ($arr as $value){
        echo"$value ";
    }
}
echo "Bài 29: ";
echo perfSquare(1,20);
echo "<br>";

//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function checkStr($substring, $string){
    if (strlen(strstr($string, $substring)) > 0) 
        echo "$substring có là chuỗi con của $string";
    else
        echo"$substring không là chuỗi con của $string";
}
 echo " Bài 30: ";
echo checkStr("abc","dai hoc thuong mai");
?>
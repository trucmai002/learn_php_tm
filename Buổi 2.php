
<?php
//Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
function countCharacterStr($input) {
    return strlen($input);
}
echo"Bài 1: ";
echo countCharacterStr("nguyen truc mai");

//Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function countWordStr ($input){
    return str_word_count($input);
}
echo"<br> Bài 2: ";
echo countWordStr ("nguyen truc mai");

//Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
function reverStr($input){
    return strrev($input);
}
echo"<br> Bài 3: ";
echo reverStr("abcdv");

//Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function searchStr($string, $substring){
    return strpos($string, $substring);
}
echo"<br> Bài 4: ";
echo searchStr("dai hoc thuong mai", "hoc");
//Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
function replaceStr($string, $substring, $replace){
    return str_replace($substring, $replace, $string);
}
echo"<br> Bài 5: ";
echo replaceStr("dai hoc thuong mai", "mai", "abc");
//Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
function checkStr ($string, $substring){
    if (strpos($string, $substring)==0)
        echo"Có bắt đầu bằng chuỗi con";
    else
        echo"Không";
}
echo"<br> Bài 6: ";
checkStr("abcd efgh", "abcd");
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
function convertStr($input){
    return strtoupper($input);
}
echo"<br> Bài 7: ";
echo convertStr("abvcf");
//8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function convertStrlow($input){
    return strtolower($input);
}
echo "<br> Bài 8: ";
echo convertStrlow("Nguyen TRUC mai");
//9.0Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
function convertStrst($input){
    return ucwords($input);
}
echo "<br> Bài 9: ";
echo convertStrst("dai hoc thuong mai");
//Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function removeWhitespace($input){
    return trim($input);
}
echo"<br> Bài 10: ";
echo removeWhitespace("     dai hoc thuong mai");
//Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function removeCharst($input){
    return ltrim($input);
}
echo"<br> Bài 11: ";
echo removeCharst("dai hoc thuong mai");
//Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function removelastchar($input){
    return rtrim($input);
}
 echo "<br> Bài 12: ";
echo removelastchar("dai hoc thuong mai");
//Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function explodeStr($input){
    return explode(",", "$input");
}
 echo "<br> Bài 13: ";
print_r (explodeStr("dai hoc,thuong mai"));

//Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function connStr($input){
    return implode(",",$input);
}
 echo "<br> Bài 14: ";
echo connStr(array("1","2"));
//Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function connSubstr($input){
    return str_pad($input, 15, "_", STR_PAD_LEFT) ."<br />";
}
 echo "<br> Bài 15: ";
echo connSubstr("thuongmai");

//Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
function checkEndStr($string, $substring){
    $result = strstr($string, $substring);
    if (str_word_count($result)== 1) return "có kết thúc bằng chuỗi này";
    else return "không";
 }
 echo "<br> Bài 16: ";
 echo checkEndStr("dai hoc thuong mai", "mai");
 
//Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function checkStr_17($string, $substring){
    if (strlen(strstr($string, $substring)) > 0) 
        echo "co chua chuoi con";
    else
        echo"khong chua";
}
 echo "<br> Bài 17: ";
echo checkStr_17("dai hoc thuong mai","abc");
//Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function replaceStr1($string, $object) {
    $x = '/[^a-zA-Z0-9]/';
    return preg_replace($x, $object, $string);
}

echo "<br> Bài 18: " . replaceStr1("Hello, 123 World!", "_") . "<br>"; ;

//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
function checkInt($input){
    if (is_int($input)) {
        echo 'số nguyên';
    }else{
        echo 'không phải số nguyên';
    }
}
 echo "Bài 19: ";
echo checkInt("dai12");
//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().*/
function checkEmail($input){
    $y='/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-] +.[a-zA-Z.]{2,5}$/';
    if (!preg_match($y,$input))
        echo "Yes";
    else    
        echo"No";
}
echo "<br> Bài 20: ";
echo checkEmail("abc@gmail.com")
?>
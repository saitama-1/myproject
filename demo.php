<?php
$name = "Học Web Chuẩn";
function myFunction()
{
    global $name; /* Khai báo sử dụng biến toàn cục */
    $name = "AAA";
    echo $name;
}
myFunction(); // Hiển thị Học Web Chuẩn
echo $name;
?>
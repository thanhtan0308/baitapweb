<?php
$mysqli = new mysqli("localhost","root","","my_sqli");
if ($mysqli->connect_errno)
{
    echo"Kết nối MYSQL lỗi" . $mysqli->connect_error;
    exit();
}
?>
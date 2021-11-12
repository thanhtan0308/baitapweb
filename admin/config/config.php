<?php
$mysqli = new mysqli("mysql.site4now.net","db_a7c5e7_thanhta","thanhtan2001","db_a7c5e7_thanhta");
if ($mysqli->connect_errno)
{
    echo"Kết nối MYSQL lỗi" . $mysqli->connect_error;
    exit();
}
?>

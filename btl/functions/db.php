<?php
// functions/db.php
function db_connect(): mysqli {
    mysqli_report(MYSQLI_REPORT_OFF); // không ném exception, ta tự bắt lỗi

    $host = 'localhost';
    $user = 'root';
    $pass = '100725';          // XAMPP mặc định để rỗng
    $db   = 'btl';       // <--- DB của bạn là btl
    $port = 3306;

    $conn = new mysqli($host, $user, $pass, $db, $port);
    if ($conn->connect_error) {
        die('Lỗi kết nối MySQL: ' . $conn->connect_error);
    }
    $conn->set_charset('utf8mb4');
    return $conn;
}

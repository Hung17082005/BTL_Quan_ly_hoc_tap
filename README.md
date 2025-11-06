📖 1. Giới thiệu
Hệ thống Quản lý học tập cá nhân được xây dựng nhằm hỗ trợ công tác quản lý, giám sát và đánh giá hoạt động của sinh viên hoặc học sinh. Hệ thống giúp
các bạn chủ động trong việc sắp xếp thời gian để không bỏ qua kiến thức.

🔧 2. Các công nghệ được sử dụng
Hệ điều hành
<img width="93" height="28" alt="image" src="https://github.com/user-attachments/assets/b2485204-99c1-496e-b323-28d2c0090848" />

Công nghệ chính
PHP HTML5 CSS SCSS JavaScript Khởi động

Máy chủ web và cơ sở dữ liệu
Người Apache MySQL XAMPP

Công cụ quản lý cơ sở dữ liệu
MySQL Workbench

🚀 3. Hình ảnh các chức năng
Trang đăng nhập
<img width="1919" height="983" alt="image" src="https://github.com/user-attachments/assets/6da124b9-90b7-4358-a713-47ff8259acda" />

Trang quản trị viên
<img width="1897" height="977" alt="image" src="https://github.com/user-attachments/assets/e3523d4d-ea78-4b3f-8512-2705fe9d8911" />

Trang lịch học
<img width="1906" height="503" alt="image" src="https://github.com/user-attachments/assets/f39469d9-74f3-43d1-bcb6-34f92b3bd548" />

Trang ghi chú 
<img width="1916" height="428" alt="image" src="https://github.com/user-attachments/assets/75ab34b1-1f2f-4f9b-add2-6ac0dfdf70e9" />

Trang mục tiêu
<img width="1916" height="192" alt="image" src="https://github.com/user-attachments/assets/f645c128-61fd-44a3-bb2a-1e4669700b03" />

## ⚙️ 4. Cài đặt
4.1. Cài đặt công cụ, môi trường và các thư viện cần thiết
Tải và cài đặt XAMPP
👉 https://www.apachefriends.org/download.html
(Khuyến nghị bản XAMPP với PHP 8.x)

Cài đặt Visual Studio Code và các tiện ích mở rộng:

PHP Intelephense
MySQL

4.2. Tải dự án
Clone project về thư mục htdocscủa XAMPP (ví dụ ổ C):
cd C:\xampp\htdocs
(https://github.com/Hung17082005/BTL_Quan_ly_hoc_tap)
Truy cập project qua đường dẫn:
👉 http://localhost/authentication_login.

4.3. Thiết lập cơ sở dữ liệu
Mở Control Panel XAMPP, Khởi động Apache và MySQL

Truy cập cơ sở dữ liệu MySQL WorkBench Create:

CREATE DATABASE IF NOT EXISTS quan_ly_doan_vien
   CHARACTER SET utf8mb4
   COLLATE utf8mb4_unicode_ci;

4.4. Setup kết nối tham số
Mở file db.php trong dự án, chỉnh sửa DB thông tin:

<?php
    function getDbConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "100725";
        $dbname = "btl";
        $port = 3306;
        $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
        if (!$conn) {
            die("Kết nối database thất bại: " . mysqli_connect_error());
        }
        mysqli_set_charset($conn, "utf8");
        return $conn;
    }
?>
4.5. Chạy hệ thống
Mở Control Panel XAMPP → Khởi động Apache và MySQL

Truy cập hệ thống: 👉(http://localhost/btl/index.php?page=dashboard)

4.6. Đăng nhập lần đầu
Hệ thống có thể cung cấp tài khoản quản trị viên

Sau khi đăng nhập Quản trị viên có thể:

Tạo lịch học, sửa xóa ghi chú mà mục tiêu

Thêm thành viên và cấp tài khoản

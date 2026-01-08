<?php
if (!class_exists('class_db')) {
    class class_db {
        public $connection_database;
        
        public function __construct() {
            $site_on_local = "localhost";
            $site_on_domain = "localhost";
        
            // تشخیص محیط اجرا
            $is_local = false;
            if (isset($_SERVER['HTTP_HOST'])) {
                $url_domain = $_SERVER['HTTP_HOST'];
                $is_local = $url_domain == $site_on_local;
            }
            
            // تنظیمات دیتابیس
            if ($is_local) {
                $servername = "localhost";
                $username_db = "root";
                $password_db = "";
                $dbname = "cafe_db";
            } else {
                $servername = $site_on_domain;
                $username_db = ""; // نام کاربری دیتابیس واقعی
                $password_db = ""; // رمز عبور دیتابیس واقعی
                $dbname = "";// نام دیتابیس واقعی
            }
            
            try {
                // ایجاد اتصال PDO
                $this->connection_database = new PDO(
                    "mysql:host=$servername;dbname=$dbname;charset=utf8mb4",
                    $username_db,
                    $password_db,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false
                    ]
                );
            } catch (PDOException $e) {
                die("خطا در اتصال به دیتابیس: " . $e->getMessage());
            }
        }
    }
}
$pdo = (new class_db())->connection_database;
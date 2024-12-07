<?php
class Database {
    private static $host = "localhost";
    private static $dbname = "tintuc";
    private static $username = "root";
    private static $password = ""; // Mặc định của XAMPP không có mật khẩu
    public static function connect() {
        try {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8";
            $pdo = new PDO($dsn, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Kết nối CSDL thất bại: " . $e->getMessage());
        }
    }
}



?>

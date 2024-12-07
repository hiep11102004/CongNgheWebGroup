<?php
class User {
    public static function login($username, $password) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->execute([$username, md5($password)]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>

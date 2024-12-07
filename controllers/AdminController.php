<?php
class AdminController {
    public function login() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = User::login($username, $password);

            if ($user && $user['role'] == 1) {
                $_SESSION['admin'] = $user;
                header("Location: index.php?controller=admin&action=dashboard");
            } else {
                $error = "Invalid username or password.";
                include "views/admin/login.php";
            }
        } else {
            include "views/admin/login.php";
        }
    }

    public function dashboard() {
        if (!isset($_SESSION['admin'])) {
            header("Location: index.php?controller=admin&action=login");
            return;
        }
        include "views/admin/dashboard.php";
    }
}
?>

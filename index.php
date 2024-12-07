<?php
session_start();

require_once "models/Database.php";
require_once "models/News.php";
require_once "models/User.php";
require_once "models/Category.php";
require_once 'controllers/HomeController.php';
require_once 'models/News.php';

// Lấy action từ URL, mặc định là 'index'
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Lấy id từ URL (nếu có)
$id = isset($_GET['id']) ? $_GET['id'] : null;

$controller = new HomeController();

if ($action === 'detail' && $id) {
    // Truyền id vào phương thức detail
    $controller->detail($id);
} else {
    // Nếu không có action hoặc action là index, gọi phương thức index
    $controller->index();
}


?>

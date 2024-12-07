<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập Quản trị viên</h2>
    <form action="index.php?controller=admin&action=login" method="post">
        <label>Tên đăng nhập:</label>
        <input type="text" name="username" required>
        <label>Mật khẩu:</label>
        <input type="password" name="password" required>
        <button type="submit">Đăng nhập</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
 
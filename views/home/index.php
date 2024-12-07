<!DOCTYPE html>
<html>
<head>
    <title>Danh Sách Bài Viết</title>
</head>
<body>
    <h2>Danh Sách Bài Viết</h2>
    <a href="index.php?controller=news&action=add">Thêm bài viết</a>
    <table border="1">
        <tr><th>ID</th><th>Tiêu đề</th><th>Ngày tạo</th><th>Hành động</th></tr>
        <?php foreach ($news as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['title'] ?></td>
            <td><?= $item['created_at'] ?></td>
            <td>
                <a href="index.php?controller=news&action=edit&id=<?= $item['id'] ?>">Sửa</a> | 
                <a href="index.php?controller=news&action=delete&id=<?= $item['id'] ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

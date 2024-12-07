<!DOCTYPE html>
<html>
<head>
    <title>Bảng Điều Khiển</title>
</head>
<body>
    <h2>Bảng Điều Khiển</h2>
    <a href="index.php?controller=news&action=add">Thêm bài viết</a> | 
    <a href="index.php?controller=admin&action=logout">Đăng xuất</a>
    <table border="1">
        <tr>
            <th>ID</th><th>Tiêu đề</th><th>Ngày tạo</th><th>Hành động</th>
        </tr>
        <?php
        if (!isset($news) || !is_array($news)) {
            $news = []; 
        }

        if (!empty($news)):
            foreach ($news as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['id']) ?></td>
                    <td><?= htmlspecialchars($item['title']) ?></td>
                    <td><?= htmlspecialchars($item['created_at']) ?></td>
                    <td>
                        <a href="index.php?controller=news&action=edit&id=<?= htmlspecialchars($item['id']) ?>">Sửa</a> | 
                        <a href="index.php?controller=news&action=delete&id=<?= htmlspecialchars($item['id']) ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; 
        else: ?>
            <tr>
                <td colspan="4">Không có bài viết nào</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>

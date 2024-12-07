<!DOCTYPE html>
<html>
<head>
    <title>Sửa Bài Viết</title>
</head>
<body>
    <h2>Sửa Bài Viết</h2>
    <form action="index.php?controller=news&action=edit&id=<?= $news['id'] ?>" method="post">
        <label>Tiêu đề:</label>
        <input type="text" name="title" value="<?= $news['title'] ?>" required>
        <label>Nội dung:</label>
        <textarea name="content"><?= $news['content'] ?></textarea>
        <label>Danh mục:</label>
        <select name="category_id">
            <option value="1" <?= $news['category_id'] == 1 ? 'selected' : '' ?>>Danh mục 1</option>
            <option value="2" <?= $news['category_id'] == 2 ? 'selected' : '' ?>>Danh mục 2</option>
        </select>
        <button type="submit">Lưu</button>
    </form>
</body>
</html>

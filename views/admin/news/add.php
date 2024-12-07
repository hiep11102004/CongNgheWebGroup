<!DOCTYPE html>
<html>
<head>
    <title>Thêm Bài Viết</title>
</head>
<body>
    <h2>Thêm Bài Viết</h2>
    <form action="index.php?controller=news&action=add" method="post" enctype="multipart/form-data">
        <label>Tiêu đề:</label>
        <input type="text" name="title" required>
        <label>Nội dung:</label>
        <textarea name="content" required></textarea>
        <label>Danh mục:</label>
        <select name="category_id">
            <option value="1">Danh mục 1</option>
            <option value="2">Danh mục 2</option>
        </select>
        <label>Hình ảnh:</label>
        <input type="file" name="image">
        <button type="submit">Thêm</button>
    </form>
</body>
</html>

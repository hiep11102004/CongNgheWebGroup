<?php
if ($news) { // Kiểm tra nếu có dữ liệu tin tức
    // Hiển thị thông tin chi tiết tin tức
    echo "<h2>" . $news['title'] . "</h2>";
    echo "<p>" . $news['content'] . "</p>";
    echo "<img src='" . $news['image'] . "' alt='Image' />";
    echo "<p><strong>Category:</strong> " . $news['category_id'] . "</p>";
    echo "<p><strong>Created At:</strong> " . $news['created_at'] . "</p>";
} else {
    echo "Không tìm thấy tin tức.";
}
?>

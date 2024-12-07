<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Danh sách tin tức</h1>
        <div class="row">
            <?php if (!empty($news)): ?>
                <?php foreach ($news as $item): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= $item['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item['title'] ?></h5>
                                <a href="index.php?controller=home&action=detail&id=<?= $item['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Không có tin tức nào để hiển thị.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

<?php
class NewsController {
    public function add() {
        include "views/admin/news/add.php";
    }

    public function edit($id) {
        include "views/admin/news/edit.php";
    }

    public function delete($id) {
        header("Location: index.php?controller=admin&action=dashboard");
    }
}
?>

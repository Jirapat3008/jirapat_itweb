<?php
    include './controls/dbfood.php';

    $sql = "SELECT `id`, `product_name`, `description`, `price`, `created_at`, `product_image` FROM `products`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>
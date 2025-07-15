<?php
    session_start();
    include 'dbfood.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $pname = $_POST['product_name'];
        $des = $_POST['description'];
        $price = $_POST['price'];

        $stmt = $pdo->prepare("UPDATE products SET product_name = ?, description = ?, price = ? WHERE id = ?");
        $result = $stmt->execute([$pname, $des, $price, $id]);

        if ($result) {
            $_SESSION['success'] = "Menu updated successfully !!!";
            header("location: ../menu.php");
        } else {
            $_SESSION['error'] = "Failed to update menu.";
            header("Location: ../editfood.php?id=" . $id);
        }

        exit;
    }
?>
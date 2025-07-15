<?php
    session_start();
    include 'dbfood.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $pdo ->prepare("DELETE FROM products WHERE id = ?");
        $result = $stmt->execute([$id]);

        if ($result) {
            $_SESSION['success'] = "Menu delete successfully !!!";
            header("location: ../menu.php");
        } else {
            $_SESSION['error'] = "Failed to delete menu.";
            header("Location: ../editfood.php?id=" . $id);
        }

        exit;
    }

?>
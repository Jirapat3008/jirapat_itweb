<?php
    session_start();
    include 'db.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $pdo ->prepare("DELETE FROM users WHERE id = ?");
        $result = $stmt->execute([$id]);

        if ($result) {
            $_SESSION['success'] = "User delete successfully !!!";
            header("location: ../users.php");
        } else {
            $_SESSION['error'] = "Failed to delete user.";
            header("Location: ../edituser.php?id=" . $id);
        }

        exit;
    }

?>
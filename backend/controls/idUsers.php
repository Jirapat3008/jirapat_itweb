<?php
    include './controls/db.php';

    //ดึงข้อมูลผู้ใช้งานจาก id
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
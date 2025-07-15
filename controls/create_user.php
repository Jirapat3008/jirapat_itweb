<?php
    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST'){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['password'],
        PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name, last_name, address, phone, email, password) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $fname,
            $lname,
            $address,
            $phone,
            $email,
            $pass
        ]);
    }

    header("location: ../index.php");
?>
<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("location : /itweb/index.php");
    exit;
}

include 'controls/idfoods.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Console</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="d-flex">
        <?php include '../backend/components/header.php'; ?>

        <main class="p-4 flex-grow-1">
            <h2>Edit Products</h2>
            <form action="controls/editFood.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $food['id']; ?>">
                <div class="mb-3">
                    <label for="">Product Name</label>
                    <input type="text" name="product_name" class="form-control"
                        value="<?= htmlspecialchars($food['product_name']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control"
                        value="<?= htmlspecialchars($food['description']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control"
                        value="<?= htmlspecialchars($food['price']); ?>">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="">Show Picture</label>
                    <img src="../assets/imgs/<?= htmlspecialchars($food['product_image']); ?>" alt="" style="width: 150px;" >
                </div>
                <div class="mb-3">
                    <label for="">Picture</label>
                    <input type="file" name="product_image" class="form-control" value="">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </main>
    </div>
</body>

</html>
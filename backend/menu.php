<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("location : /itweb/index.php");
    exit;
}
?>

<?php
include 'controls/fetchProduct.php'
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
            <div class="d-flex justify-content-between mb-3">
                <h2>Menu List</h2>
                <a href="addmenu.php" class="btn btn-outline-secondary p-2 fw-bold">Add Menu</a>
            </div>
            <table class="table table-bordered">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Product image</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Create Date</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td class="text-center"><?= htmlspecialchars($row['id']); ?></td>
                            <td>
                                <img src="../assets/imgs/<?= htmlspecialchars($row['product_image']); ?>" alt="" style="width: 150px;">
                            </td>
                            <td class="text-left"><?= htmlspecialchars($row['product_name']); ?></td>
                            <td class="text-left"><?= htmlspecialchars($row['description']); ?></td>
                            <td class="text-left"><?= htmlspecialchars($row['price']); ?> THB</td>
                            <td class="text-center"><?= htmlspecialchars($row['created_at']); ?></td>
                            <td class="text-center">
                                <a href="editfood.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <button class="btn btn-sm btn-danger" onclick="confirmDelete(<?= $row['id'] ?>)">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                                <script>
                                    function confirmDelete(id) {
                                        Swal.fire({
                                            title: 'Are you sure ???',
                                            text: "Are you sure to delete Menu ???",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'Yes, Delete it !!!',
                                            cancelButtonText: 'Cancel'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = `controls/deleteFood.php?id=${id}`;
                                            }
                                        });
                                    }
                                </script>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
    <?php if (isset($_SESSION['success'])) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'success',
                text: '<?= $_SESSION['success']; ?>',
                confirmButtonText: 'confirm'
            });
        </script>
    <?php unset($_SESSION['success']);
    endif; ?>

    <?php if (isset($_SESSION['error'])) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'error',
                text: '<?= $_SESSION['error']; ?>',
                confirmButtonText: 'confirm'
            });
        </script>
    <?php unset($_SESSION['error']);
    endif; ?>
</body>

</html>
<?php
    session_start();
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        header("location : /itweb/index.php");
        exit;
    }

    include 'controls/idUsers.php'; 
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
            <h2>Edit Users</h2>
            <form action="controls/editUser.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                <div class="mb-3">
                    <label for="">Firstname</label>
                    <input type="text" name="first_name" class="form-control" value="<?= htmlspecialchars($user['first_name']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">Lastname</label>
                    <input type="text" name="last_name" class="form-control" value="<?= htmlspecialchars($user['last_name']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <textarea type="address" name="address" class="form-control"><?= htmlspecialchars($user['address']); ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($user['phone']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= htmlspecialchars($user['email']); ?>">
                </div>
                <!-- <div class="mb-3">
                    <label for="">Role</label>
                    <select type="text" name="role" class="form-select">
                        <option value="<?= htmlspecialchars($user['role']); ?>">admin</option>
                        <option value="<?= htmlspecialchars($user['role']); ?>">customer</option>
                    </select>
                </div> -->
                <div class="mb-3">
                    <label for="">Picture</label>
                    <input type="file" name="profile_image" class="form-control">
                </div>
                    <a href="users.php" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                
            </form>
        </main>
    </div>
</body>

</html>
<?php
include './controls/fetchUser.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <?php include './components/header.php'; ?>

    <section id="fetch_User.php" class="py-5">
        <div class="container">
            <h2 class="mb-4">Show user information</h2>
            <?php if ($stmt->rowCount() > 0) : ?>
                <div class="container mt-5">
                    <div class="row">
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($row['first_name'] . " " . htmlspecialchars($row['last_name'])); ?></h5>
                                        <p class="card-text"><strong>Email:</strong><?php echo htmlspecialchars($row['email']); ?></p>
                                        <p class="card-text"><strong>Phone:</strong><?php echo htmlspecialchars($row['phone']); ?></p>
                                        <p class="card-text"><strong>Address:</strong><?php echo htmlspecialchars($row['address']); ?></p>
                                        <p class="card-text"><strong>Create at:</strong><?php echo htmlspecialchars($row['created_at']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endif ?>

            <a href="./backend/addmenu.php" class="btn btn-success floating-btn">+</a>

        </div>
    </section>

    <?php include './components/footer.php'; ?>
</body>

</html>
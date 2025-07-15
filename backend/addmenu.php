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
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body style="background: linear-gradient(to bottom right, #ff7b00ff,rgba(255, 221, 193, 1));">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 35%;">
        <div class="card shadow" style="width: 100%;">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body p-4 justify-content-center align-items-center">

                        <a href="menu.php" class="btn btn-close"></a>
                        
                        <h2 class="text-center">Add Menu</h2>
                        <form method="POST" action="./controls/create_menu.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Product Name</label>
                                <input type="text" name="product_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Product image</label>
                                <input type="file" name="product_image" class="form-control" required>
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn btn-primary w-50">Add this menu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
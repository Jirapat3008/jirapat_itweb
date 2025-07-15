<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body style="background: linear-gradient(to bottom right, #001261,rgb(244, 98, 0));">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 70%;">
        <div class="card shadow" style="width: 100%;">
            <div class="row g-0">
                <div class="col-md-6 d-none d-md-block">
                    <img src="assets/imgs/sea.jpeg" alt="" class="img-fluid" style="object-fit: cover;width: 100%; height: 100%;">
                </div>
                <div class="col-md-6">
                    <div class="card-body p-4 justify-content-center align-items-center">
                        <h2 class="text-center">SignUp</h2>
                        <form method="POST" action="./controls/create_user.php">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="lastname" class="form-label">Lastname</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Address</label>
                                <textarea name="address" id="" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" required>
                            </div class="mb-3">

                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                        </form>

                        <div class="text-center mt-3">
                            <span>You have an account?</span>
                            <a href="signin.php">SignIn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
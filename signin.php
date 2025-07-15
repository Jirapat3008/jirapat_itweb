<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body style="background: linear-gradient(to bottom right,rgb(1, 0, 43), rgb(0, 50, 124));"> 
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 70%;">
        <div class="card" style="width: 100%;">
            <div class="row g-0 shadow">
                <div class="col-md-6 d-flex justify-content-center align-items-center py-5 px-3">
                    <div class="card-body p-4">
                        <h2 class="text-center">SignIn</h2>
                        <form method="POST" action="./controls/signinUsers.php">
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">SignIn</button>
                        </form>

                        <div class="text-center mt-3">
                            <span>Don't have an account?</span>
                            <a href="signup.php">SignUp</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-none d-md-block">
                    <img src="assets/imgs/stars.jpeg" alt="" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
    <script>
    <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid') : ?>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Invalid email or password',
        footer: 'Please try again.'
    });
    <?php endif; ?>
    </script>
</body>

</html>
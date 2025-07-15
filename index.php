<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Website</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php include './components/header.php'; ?>
    
    <!-- Hero section -->
    <section class="hero text-white text-center py-5"
        style="background: linear-gradient(to bottom right,rgb(17, 0, 56),rgb(0, 133, 221)); height: 100vh;">
        <div class="container h-100 d-flex flex-column justify-content-center">
            <h1 class="display-4">Welcome to our website</h1>
            <p class="lead">Discover the world of information technology and the latest news on technological
                developments.</p>
            <a href="#content" class="btn btn-light btn-lg mx-auto">Start Now !!</a>
        </div>
    </section>

    <!-- Content section -->
    <section id="content" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">About Technolofy Information</h2>
            <p>We provide the latest news, insights, and solutions in the world of IT — from software development,
                cybersecurity, AI innovations, to tech tips that help you stay ahead in the digital era.
                Whether you're a professional, a student, or simply a tech enthusiast, our platform is here to support
                your journey in the ever-evolving tech landscape.
                Explore our articles, tutorials, and tools designed to empower and inspire your digital skills.
            </p>
            <p>
                The future of Information Technology (IT) will be driven by rapid advancements in AI, cloud computing, 
                and the Internet of Things. These technologies will make our world more connected, efficient, and intelligent. 
                Businesses, education, and daily life will increasingly rely on IT for automation, data analysis, and communication. 
                At the same time, cybersecurity and data privacy will become more important than ever. 
                To thrive in this digital future, people must continuously adapt and learn new skills to keep up with fast-changing 
                technologies.
            </p>
        </div>
    </section>

    <?php include './components/footer.php'; ?>

    <!-- <h1>Hello Robolx Yonger</h1>
    <p><?php echo htmlspecialchars($_SESSION['name']); ?></p>
    <p><?php echo htmlspecialchars($_SESSION['email']); ?></p> -->


    <script>
        <?php
        if (isset($_GET['success']) && $_GET['success'] == 'true') : ?>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'You have signed in successfully!',
                footer: 'Go Away Teen'
            });
        <?php endif; ?>
    </script>
</body>

</html>
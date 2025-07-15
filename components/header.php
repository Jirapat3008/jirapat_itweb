<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Hiw jang hoo</a>
            <!-- <button class="navbar-navbar-toggler" type="button" data-ba-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-togger-icon"></span>
            </button> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="foodlist.php" class="nav-link">Food List</a>
                    </li>

                    <li class="nav-item">
                        <a href="user.php" class="nav-link">Users</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome! <?php echo htmlspecialchars($_SESSION['name']) ?> to My Website
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
                            <li><a href="/itweb/backend/index.php" class="dropdown-item">Setting</a></li>
                            <?php endif; ?>
                            <li><a href="#" class="dropdown-item">Profile</a></li>
                            <li><a href="controls/signout.php" class="dropdown-item">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
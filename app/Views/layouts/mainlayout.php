<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <ul>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li><a href="<?= base_url('/news') ?>">News</a></li>
            <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
            <li><a href="<?= base_url('/about') ?>">About</a></li>
        </ul>
    </nav>

    <!-- Content -->
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Company</p>
    </footer>

</body>
</html>

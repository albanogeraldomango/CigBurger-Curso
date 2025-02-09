<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CigBurger BackOffice</title>
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/png">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/libs/bootstrap/bootstrap.min.css') ?>">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/libs/fontawesome/all.min.css') ?>">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
</head>

<body class="login-page-background">

    <!-- Top Bar -->
    <?= $this->include('partials/top_bar.php') ?>

    <!-- main -->
    <section class="d-flex">

        <!-- main menu -->
        <nav class="main-menu p-2">
            <?= $this->include('partials/main_menu.php') ?>
        </nav>

        <!-- content -->
        <div class="content p-4">
            <?= $this->renderSection('content')?>
        </div>
    </section>
    <!-- footer -->
     <?= $this->include('partials/footer.php')?>

    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/libs/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <script>
        document.querySelector(".btn-main-menu").addEventListener("click", () => {
            document.querySelector(".main-menu").classList.toggle("show");
            document.querySelector(".content").classList.toggle("show");
        })
    </script>
</body>

</html>
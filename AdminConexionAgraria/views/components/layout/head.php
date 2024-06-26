<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

<head>
    <meta charset="utf-8" />
    <title>ADMIN CONEX. AGRARIA</title>
    <link rel="icon" href="./assets/images/icono2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/js/head.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <script src="https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.11.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.11.0/firebase-storage.js"></script>

    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <?php
        require_once ('./views/components/sidebar.php');
        ?>
        <div class="content-page">
            <?php
            require_once ('./views/components/navbar.php');
            ?>
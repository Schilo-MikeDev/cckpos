<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Système de point de vente (Point Of Sale)">
    <meta name="keywords" content="POS, Terminal, Gestion des employés, Gestion des stocks, Gestion des ventes, Gestion des clients, Codes-barres, Inventaire, Rapports de ventes, Commerce électronique, Sécurité des paiements, Paiement par carte de crédit/débit, Imprimante de reçu, Loyauté client, Service client">

    <title>POS | Coding Club Kafou</title>

    <!-- ====================== FAV ICONS ====================== -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <!-- ====================== BOOTSTRAP CSS ====================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ====================== JQUERY ====================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <!-- ====================== WAYPOINTS ====================== -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
            <!-- ====================== COUNTER-UP ====================== -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <!-- ====================== REMIXICONS ====================== -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- ====================== MAIN CSS ====================== -->
    <link rel="stylesheet" href="css/styles.css?v=5">

    <!-- ====================== SWIPER CSS ====================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- ====================== BREAKPOINTS ====================== -->
    <link rel="stylesheet" href="css/mobile1.css" media="screen and (0 <= width <= 320px)">
    <link rel="stylesheet" href="css/mobile2.css" media="screen and (321px <= width <= 540px)">
    <link rel="stylesheet" href="css/mobile3.css" media="screen and (541px <= width <= 667px)">
    <link rel="stylesheet" href="css/mobile4.css" media="screen and (668px <= width <= 889px)">
    <link rel="stylesheet" href="css/mobile5.css" media="screen and (890px <= width <= 999px)">
    <link rel="stylesheet" href="css/mobile6.css" media="screen and (1000px <= width <= 1200px)">
</head>
<body>
    <header id="header">
        <a href="index.php"><img src="images/logo.png" alt="Logo" id="logo"></a>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3">

            </nav>

            <main id="main" class="col-md-6">
                <div class="row">
                    <div class="input-box col-md-6">
                    <i class="ri-search-2-line"></i><input type="search" name="search_product" id="search_product" required>
                        <span>Product name</span>
                    </div>
                    <div id="category" class="col-md-6">
                        <label for="category">Category</label>
                        <select name="category" id="category">
                            <option value="">All</option>
                            <option value="">Category 1</option>
                            <option value="">Category 2</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <?php
                        echo '<div id="product-content">';
                        echo '<div class="col-md-3">';

                        echo '</div>';
                        echo '</div>';
                    ?>
                </div>
            </main>

            <div id="accessibility" class="col-md-3">

            </div>

            <footer id="footer" class="bg bg-dark">
                <p>All rights reserverd | Coding Club Kafou &copy;2023</p>
            </footer>
        </div>
    </div>

    <!-- ====================== BOOTSTRAP JS ====================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ====================== SWIPER JS ====================== -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- ====================== MAIN JS ====================== -->
    <script src="javascript/main.js"></script>
</body>
</html>
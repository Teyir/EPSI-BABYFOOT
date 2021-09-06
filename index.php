<?php
// Session
session_start();
// Erreur
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Timezone
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, "fr_FR");

// Si on veut include la connexion à la bdd
require ("controller/db_connect.php")
?>


<!doctype html>
<html lang="fr">
<head>

    <title>
        Galactik Foosball | <?= (isset($_GET['page'])) ? ucfirst($_GET['page'])  : "Galactik Foosball" ?>
    </title>


    <!-- META -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Couleurs du thème -->
    <meta name="theme-color" content="#0396FF">
    <meta name="msapplication-navbutton-color" content="#0396FF">
    <meta name="apple-mobile-web-app-statut-bar-style" content="#0396FF">
    <meta name="apple-mobile-web-app-capable" content="#0396FF">

    <meta property="og:locale" content="fr_FR" />
    <meta property="og:title" content="Galactik Foosball">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://Galactik-Foosball.fr">
    <meta property="og:image" content="PENSER A METTRE URL DU LOGO">
    <meta property="og:image:alt" content="Galactik Foosball - Baby Foot">
    <meta property="og:description" content="Galactik Foosball - Baby Foot">
    <meta property="og:site_name" content="Galactik Foosball" />


    <meta name="author" content="Thomas, Mathurin, Cameron, Mael, Amauryne, Lisa" />
    <meta name="publisher" content="Galactik Foosball"/>
    <meta name="description" content="Galactik Foosball - Baby Foot">
    <meta name="copyright" content="Thomas, Mathurin, Cameron, Mael, Amauryne, Lisa"/>


    <meta name="robots" content="follow, index, all, max-snippet:-1, max-image-preview:large, max-video-preview:-1">


    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fa-all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">

</head>
<body>

<?php

// On include le système de pages

include('navbar.php');

include('controller/page.php');

include('footer.php');


?>




<!-- SCRIPTS -->
<script type="application/javascript" src="assets/js/custom.js"></script>

<script type="application/javascript" src="assets/js/mdb.min.js"></script>
<script type="application/javascript" src="assets/js/fa-all.js"></script>



</body>
</html>


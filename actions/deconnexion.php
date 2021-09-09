<?php
session_start();
$_SESSION["id_connecté"]= NULL;
$_SESSION["connecté"]= NULL;
$_SESSION["erreur"]= NULL;
$_SESSION["pseudo"] = NULL;
$_SESSION["classe"] = NULL;
$_SESSION["ecole"] = NULL;
$_SESSION["image_profile"] = NULL;

header("location:../index.php?page=profile");

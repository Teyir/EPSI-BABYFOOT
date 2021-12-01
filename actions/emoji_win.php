<?php
session_start();

$emoji = filter_input(INPUT_POST, "emoji_win");


require_once "../controller/db_connect.php";

$requete = $pdo->prepare("UPDATE users SET emoji_win=:emoji WHERE pseudo=:pseudo");
$requete->bindParam(":emoji", $emoji);
$requete->bindParam(":pseudo", $_SESSION["pseudo"]);
$requete->execute();

header("location:../index.php?page=profile");

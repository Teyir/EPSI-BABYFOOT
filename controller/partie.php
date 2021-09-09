<?php
// ID EMOJI WIN

$requete = $pdo->prepare("SELECT emoji_win FROM users WHERE pseudo=:pseudo");
$requete->bindParam(":pseudo", $_SESSION['pseudo']);
$requete->execute();
$emoji_win_id = $requete->fetch();
$emoji_win_id = $emoji_win_id[0];


// ID EMOJI LOOSE

$requete = $pdo->prepare("SELECT emoji_loose FROM users WHERE pseudo=:pseudo");
$requete->bindParam(":pseudo", $_SESSION['pseudo']);
$requete->execute();
$emoji_loose_id = $requete->fetch();
$emoji_loose_id = $emoji_loose_id[0];

//infos du joueur connecté

$requete = $pdo->prepare("SELECT classe, ecole FROM users WHERE pseudo=:pseudo");
$requete->bindParam(":pseudo", $_SESSION['pseudo']);
$requete->execute();
$infos_connecte = $requete->fetch();

//score du match en cours

$requete = $pdo->prepare("SELECT score_j1, score_j2, j1, j2 FROM historique_matchs WHERE etat='en-cours'");
$requete->execute();
$infos_match = $requete->fetch();
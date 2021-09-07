<?php

//AFFICHAGE SCORE

$requete = $pdo->prepare("SELECT victoires, score, meilleur_score, score_total FROM users WHERE pseudo =:pseudo");
$requete->bindParam(":pseudo", $_SESSION['pseudo']);
$requete->execute();

$score = $requete->fetchAll();


// HISTORIQUE PROFILE

$requete = $pdo->prepare("SELECT * FROM historique_matchs WHERE j1 =:id_joueur OR j2 =:id_joueur");
$requete->bindParam(":id_joueur", $_SESSION['id_connecté']);
$requete->execute();
$historique_profile = $requete->fetchAll();


// AFFICHAGE DES PSEUDOS POUR L'HISTORIQUE DES PROFILES POUR LE J1 & LE J2

$requete = $pdo->prepare("SELECT pseudo FROM users WHERE id=:id_joueur");
$requete->bindParam(":id_joueur", $_SESSION['id_connecté']);
$requete->execute();
$pseudo_id = $requete->fetchAll();

//$requete = $pdo->prepare("SELECT pseudo FROM historique_matchs RIGHT JOIN users ON j2 = users.id");



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

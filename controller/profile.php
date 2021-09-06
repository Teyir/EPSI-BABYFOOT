<?php

//AFFICHAGE SCORE

$requete = $pdo->prepare("SELECT score, meilleur_score, score_total FROM users WHERE pseudo =:pseudo");
$requete->bindParam(":pseudo", $_SESSION['pseudo']);
$requete->execute();

$score = $requete->fetchAll();


// HISTORIQUE PROFILE

$requete = $pdo->prepare("SELECT * FROM historique_matchs WHERE j1 =:id_joueur OR j2 =:id_joueur");
$requete->bindParam(":id_joueur", $_SESSION['id_connecté']);
$requete->execute();
$historique_profile = $requete->fetchAll();


// AFFICHAGE DES PSEUDOS POUR L'HISTORIQUE DES PROFILES POUR LE J1 & LE J2

$requete = $pdo->prepare("SELECT pseudo FROM historique_matchs RIGHT JOIN users ON j1 = users.id ORDER BY ASC");
$requete->bindParam("");


//$requete = $pdo->prepare("SELECT pseudo FROM historique_matchs RIGHT JOIN users ON j2 = users.id");
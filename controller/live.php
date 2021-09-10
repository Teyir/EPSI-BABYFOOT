<?php

//Stats J1
$requete = $pdo->prepare("SELECT * FROM users WHERE id =1");
$requete->execute();

$statsJ1 = $requete->fetchAll();


//Stats J2
$requete = $pdo->prepare("SELECT * FROM users WHERE id =2");
$requete->execute();

$statsJ2 = $requete->fetchAll();


$statsJ1[0]["score"] = $statsJ2[0]["score"] - 1;
$statsJ2[0]["score"] = $statsJ2[0]["score"] - 1;

<?php
require_once "../controller/db_connect.php";

$couleur_joueur = filter_input(INPUT_POST, "couleur_joueurs");

$requete = $pdo->prepare("SELECT score_j1, score_j2, j1, j2 FROM historique_matchs WHERE etat='en-cours'");
$requete->execute();
$infos_match = $requete->fetch();

if ($couleur_joueur == "bleu"){
    if (!isset($infos_match[0])){
        $requete = $pdo->prepare("INSERT INTO historique_matchs (score_j1, score_j2)VALUES (0, 0)");
        $requete->bindParam(":id_j1", $_SESSION["id_connecté"]);
        $requete->execute();
    }
}
else if ($couleur_joueur == "rouge"){
    if (!isset($infos_match[0])){
        $requete = $pdo->prepare("INSERT INTO historique_matchs (score_j1, score_j2)VALUES (0, 0)");
        $requete->bindParam(":id_j2", $_SESSION["id_connecté"]);
        $requete->execute();
    }
}
else {
    $_SESSION["erreur"]= 1;
}
sleep(1);
header("location:../index.php?page=partie");
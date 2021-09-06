<?php
session_start();

$pseudo = filter_input(INPUT_POST, "pseudo");



require_once "../controller/db_connect.php";

$requete = $pdo->prepare("SELECT id, pseudo, classe, ecole FROM users WHERE (pseudo=:pseudo)");
$requete->bindParam(":pseudo", $pseudo);


$requete->execute();

$lignes = $requete->fetchAll();

if (count($lignes)==0){
    $_SESSION["erreur"]= 1;
    header("location:../index.php?page=profile");
}
else {
    $_SESSION["id_connecté"]= htmlspecialchars($lignes[0]["id"]);
    $_SESSION["connecté"]= 1;
    $_SESSION["erreur"]= 0;
    $_SESSION["pseudo"] = htmlspecialchars($lignes[0]["pseudo"]);
    $_SESSION["classe"] = htmlspecialchars($lignes[0]["classe"]);
    $_SESSION["ecole"] = htmlspecialchars($lignes[0]["ecole"]);
    header("location:../index.php?page=profile");
}

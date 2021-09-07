<?php
session_start();

$pseudo = filter_input(INPUT_POST, "pseudo");
$ecole = filter_input(INPUT_POST, "ecole");
$classe = filter_input(INPUT_POST, "classe");
$password = filter_input(INPUT_POST, "password");


//On hashe le mdp

$password = sha1($password);

require_once "../controller/db_connect.php";


//On vérifie si le pseudo existe

$requete = $pdo->prepare("SELECT pseudo FROM users WHERE (pseudo=:pseudo)");
$requete->bindParam(":pseudo", $pseudo);
$requete->execute();

$pseudoVerif = $requete->fetch();


if ($pseudoVerif[0] === $pseudo){
    header("location:../index.php?page=profile");
    die;
}


//Si tout est bon on insert l'utilisateur dans la bdd
$var = array(
    'pseudo' => $pseudo,
    'ecole' => $ecole,
    'classe' => $classe,
    'password' => $password
);
$sql = "INSERT INTO users (pseudo, ecole, classe, password) values (:pseudo, :ecole, :classe, :password)";

$requete = $pdo->prepare($sql);
$requete->execute($var);

header("location:../index.php?page=profile");



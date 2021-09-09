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

// Sélection d'une photo de profile aléatoire
$rand_pp = rand(1,5);

$pp = "pp_".$rand_pp.".png";

//Si tout est bon on insert l'utilisateur dans la bdd
$var = array(
    'pseudo' => $pseudo,
    'ecole' => $ecole,
    'classe' => $classe,
    'password' => $password,
    'image_profile' => $pp
);
$sql = "INSERT INTO users (pseudo, ecole, classe, password, image_profile) values (:pseudo, :ecole, :classe, :password, :image_profile)";

$requete = $pdo->prepare($sql);
$requete->execute($var);

header("location:../index.php?page=profile");



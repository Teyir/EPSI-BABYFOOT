<?php
//Récupération des données de tous les matchs (ordre descendant pour voir le dernier match en premier):
$requete = $pdo->prepare("SELECT * FROM historique_matchs order by id desc");
$requete->bindParam(":id_joueur", $_SESSION['id_connecté']);
$requete->execute();
$historique_profile = $requete->fetchAll();



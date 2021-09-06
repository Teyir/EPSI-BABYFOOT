<?php
// Ce fichier permet de gérer les pages, donc les includes etc...



if(isset($_GET['page']))
{
    switch ($_GET['page']) // Sélection de la page
    {
        case 'accueil':
            unset($_GET['page']);
            require_once('controller/accueil.php');
            include('pages/accueil.php');
            break;

        case 'test':
            unset($_GET['page']);
            require_once('controller/test.php');
            include('pages/test.php');
            break;


        // Si le get est inconnue on l'envoie sur une page d'erreur
        default:
            unset($_GET['page']);
            require_once('controller/erreur.php');
            include('pages/erreur.php');
    }
}

// Si aucun get n'est définis on affiche la page d'accueil
else
{
    require_once('controller/accueil.php');
    include('pages/accueil.php');
}
?>

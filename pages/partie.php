<?php
if (!isset($infos_match[0])){
    ?>
    <h1 class="text-center">Inscription au match</h1>
    <h2 class="text-center">Pour jouer, sélectionnez votre couleur :</h2>


    <form class="text-center" method="post" action="actions/jouer.php">
        <label>
            <input name="couleur_joueurs" value="bleu">
            <div class="carre_bleu"></div>
        </label>

        <label>
            <input name="couleur_joueurs" value="rouge">
            <div class="carre_rouge"></div>
        </label>

        <input type="submit" class="btn btn-success"  value="Envoyer">
    </form>
    <?php
}
else {
    if ("but marqué") {
        if ($emoji_win_id == 1){
            ?> <div class="text-center"><img class="partie-emoji img-fluid rounded" src="assets/img/emoji_goal.gif" alt="Emoji goal"></div> <?php
        }
        if ($emoji_win_id == 2){
            ?> <div class="text-center"><img class="partie-emoji img-fluid rounded" src="assets/img/emoji_russian.gif" alt="Emoji russian"></div> <?php
        }
        if ($emoji_win_id == 3){
            ?> <div class="text-center"><img class="partie-emoji img-fluid rounded" src="assets/img/emoji_money.gif" alt="Emoji money"></div> <?php
        }
        if ($emoji_win_id == 4){
            ?> <div class="text-center"><img class="partie-emoji img-fluid rounded" src="assets/img/emoji_king.gif" alt="Emoji king"></div> <?php
        }
    }
    else if ("but pris") {
        if ($emoji_loose_id == 1){
            ?> <div class="text-center"><img class="partie-emoji img-fluid rounded" src="assets/img/emoji_cat_angry.gif" alt="Emoji goal"></div> <?php
        }
        if ($emoji_loose_id == 2){
            ?> <div class="text-center"><img class="partie-emoji img-fluid rounded" src="assets/img/emoji_fight.gif" alt="Emoji goal"></div> <?php
        }
        if ($emoji_loose_id == 3){
            ?> <div class="text-center"><img class="partie-emoji img-fluid rounded" src="assets/img/emoji_monster.gif" alt="Emoji goal"></div> <?php
        }
        if ($emoji_loose_id == 4){
            ?> <div class="text-center"><img class="partie-emoji img-fluid rounded" src="assets/img/emoji_ragequitte.gif" alt="Emoji goal"></div> <?php
        }
    }
    else if ("rien") {
        ?> <div class="text-center partie-emoji" id="carre"></div> <?php
    }
    ?>
    <h1 class="text-center"><?php echo $_SESSION['pseudo'] ?></h1>
    <h1 class="text-center"><?php echo $infos_connecte['classe'], " / ", $infos_connecte['ecole']  ?></h1>
    <?php
    if ($infos_match['j1'] == $_SESSION['connecté']){
        ?> <h1 class="text-center"><?php echo $infos_match['score_j1'], " / ", $infos_match['score_j2'] ?></h1> <?php
    }
    else if ($infos_match['j2'] == $_SESSION['connecté']){
        ?> <h1 class="text-center"><?php echo $infos_match['score_j2'], " / ", $infos_match['score_j1'] ?></h1> <?php
    }

    if ($infos_match['j1'] == $_SESSION['connecté']){
        $requete = $pdo->prepare("SELECT pseudo, classe, ecole FROM users WHERE id=:id");
        $requete->bindParam(":id", $infos_match['j2']);
        $requete->execute();
        $adversaire = $requete->fetch();
    }
    else if ($infos_match['j2'] == $_SESSION['connecté']){
        $requete = $pdo->prepare("SELECT pseudo, classe, ecole FROM users WHERE id=:id");
        $requete->bindParam(":id", $infos_match['j1']);
        $requete->execute();
        $adversaire = $requete->fetch();
    }
    ?>
    <h1 class="text-center"><?php echo $adversaire['pseudo'] ?></h1>
    <h1 class="text-center"><?php echo $adversaire['classe'], " / ", $adversaire['ecole']  ?></h1>
<?php
}

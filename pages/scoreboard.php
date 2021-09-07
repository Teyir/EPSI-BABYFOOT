<h2>Historique des parties</h2>
<hr>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Joueur 1</th>
        <th scope="col">Joueur 2</th>
        <th scope="col">Score</th>
    </tr>
    </thead>
    <tbody>
    <!--  Vérification de participation au match, de victoire et de défaite :  -->
    <?php foreach ($historique_profile as $historique):

        //Affichage du pseudo du joueur 1
        $requete = $pdo->prepare("SELECT pseudo FROM users WHERE id=:id_j1");
        $requete->bindParam(":id_j1", $historique['j1']);
        $requete->execute();
        $pseudo_id1 = $requete->fetch();

        //Affichage du pseudo du joueur 1
        $requete = $pdo->prepare("SELECT pseudo FROM users WHERE id=:id_j2");
        $requete->bindParam(":id_j2", $historique['j2']);
        $requete->execute();
        $pseudo_id2 = $requete->fetch();
        ?>
        <tr
        <?php
        if ($_SESSION["id_connecté"] == $historique['j1']){
            if ($historique['score_j1'] > $historique['score_j2']) {
        ?>
                class="table-warning"
        <?php
            }
            else {
        ?>
                class="table-danger"
        <?php
        }}
        if ($_SESSION["id_connecté"] == $historique['j2']){
            if ($historique['score_j2'] > $historique['score_j1']) {
        ?>
                class="table-warning"
        <?php
            }
            else {
        ?>
                class="table-danger"
        <?php
        }}
        ?>
        >
            <!--  Statistiques du match :  -->
            <th scope="row"><?= $historique['id']?></th>
            <td><?= $pseudo_id1[0] ?></td>
            <td><?= $pseudo_id2[0] ?></td>
            <td><?= $historique['score_j1'] ?> : <?= $historique['score_j2'] ?></td>
        </tr>

    <?php endforeach; ?>

    </tbody>
</table>
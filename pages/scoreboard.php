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
    <tbody>²
    <!--  Vérification de participation au match, de victoire et de défaite :  -->
    <?php foreach ($historique_profile as $historique):
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
            <td><?= $historique['j1'] ?></td>
            <td><?= $historique['j2'] ?></td>
            <td><?= $historique['score_j1'] ?> : <?= $historique['score_j2'] ?></td>
        </tr>

    <?php endforeach; ?>

    </tbody>
</table>
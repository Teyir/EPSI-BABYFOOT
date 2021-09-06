<?php
if (isset($_SESSION["connecté"]) == 0 ):?>
<div class="container register">
    <div class="row">

        <div class="col-md-9 register-right">
            <form action="actions/connexion_action.php" method="post">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Connexion</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre pseudo *" id="pseudo" name="pseudo" maxlength="12" required>
                                </div>

                                <input type="submit" class="btnRegister"  value="Se connecter">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            </form>
    </div>
</div>


<!-- Si on est connecté alors on affiche cette partie du code: -->
<?php else: ?>

    <section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="assets/img/logo_placeholder.png" alt="avatar de <?= $_SESSION["pseudo"] ?>" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3"><?= $_SESSION["pseudo"] ?></h5>
                            <h6 class="text-muted mb-1"><strong>Score total: </strong><?= htmlspecialchars($score[0]["score_total"]) ?></h6>
                            <h6 class="text-muted mb-1"><strong>Meilleur score: </strong><?= htmlspecialchars($score[0]["meilleur_score"]) ?></h6>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Pseudo</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $_SESSION["pseudo"] ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">École</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $_SESSION["ecole"] ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Classe</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $_SESSION["classe"] ?></p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Gestion des EMOJI -->
                    <button class="btn btn-info" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#collapseEmojiWin" aria-expanded="false"
                            aria-controls="collapseEmojiWin">
                        Mes emoji de victoire
                    </button>

                    <button class="btn btn-danger" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#collapseEmojiLoose" aria-expanded="false"
                            aria-controls="collapseEmojiLoose">
                        Mes emoji de défaite
                    </button>



                    <!-- Affichage des EMOJI de victoire -->
                    <div class="collapse mt-3" id="collapseEmojiWin">
                        <a href="#" onclick="selEmoji();">
                            <img class="emoji-preview" id="emoji" src="assets/img/emoji_goal.gif" alt="Emoji goal">
                        </a>

                        <img class="emoji-preview" src="assets/img/emoji_russian.gif" alt="Emoji russian">
                        <img class="emoji-preview" src="assets/img/emoji_money.gif" alt="Emoji money">
                        <img class="emoji-preview" src="assets/img/emoji_king.gif" alt="Emoji king">


                    </div>



                    <!-- Affichage des EMOJI de défaite -->
                    <div class="collapse mt-3" id="collapseEmojiLoose">
                        <img class="emoji-preview" src="assets/img/logo_placeholder.png">


                    </div>


                </div>

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
                    <?php foreach ($historique_profile as $historique): ?>

                        <tr>
                            <th scope="row"><?= $historique['id'] ?></th>
                            <td><?= $historique['j1'] ?></td>
                            <td><?= $historique['j2'] ?></td>
                            <td><?= $historique['score_j1'] ?> : <?= $historique['score_j2'] ?></td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </section>

<?php endif; ?>


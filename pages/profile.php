<?php
if (isset($_SESSION["connecté"]) == 0 ):?>
<div class="container register">
    <div class="row">

        <ul class="nav nav-pills nav-fill mb-3" id="pills" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-connexion-tab" data-mdb-toggle="pill" href="#pills-connexion"
                   role="tab" aria-controls="pills-connexion" aria-selected="true">
                    Connexion
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-inscription-tab" data-mdb-toggle="pill" href="#pills-inscription"
                   role="tab" aria-controls="pills-inscription" aria-selected="false">
                    Inscription
                </a>
            </li>



        </ul>

        <!-- Connexion -->
        <div class="tab-content" id="pills-profile">
            <div class="tab-pane fade show active" id="pills-connexion" role="tabpanel" aria-labelledby="pills-connexion-tab">
                <div class="col-md-9 mx-auto">

                    <form action="actions/connexion_action.php" method="post">

                        <div class="form-outline mb-4">
                            <input type="text" id="pseudo" name="pseudo" class="form-control" maxlength="12" required />
                            <label class="form-label" for="pseudo">Pseudo</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control" required/>
                            <label class="form-label" for="password">Mot de passe</label>
                        </div>


                        <div class="text-center btnRegister">
                            <input type="submit" class="btn btn-success"  value="Se connecter">
                        </div>


                    </form>
                </div>
            </div>

            <!-- Inscription-->
            <div class="tab-pane fade" id="pills-inscription" role="tabpanel" aria-labelledby="pills-inscription-tab">
                <div class="tab-pane fade show active" id="pills-connexion" role="tabpanel" aria-labelledby="pills-connexion-tab">
                    <div class="col-md-9 mx-auto">

                        <form action="actions/inscription_action.php" method="post">

                            <div class="form-outline mb-4">
                                <input type="text" id="pseudo" name="pseudo" class="form-control" maxlength="12" required />
                                <label class="form-label" for="pseudo">Pseudo</label>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="ecole" name="ecole" class="form-control" required/>
                                        <label class="form-label" for="ecole">École</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="classe" name="classe" class="form-control" required/>
                                        <label class="form-label" for="classe">Classe</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control" required/>
                                <label class="form-label" for="password">Mot de passe</label>
                            </div>


                            <div class="text-center btnRegister">
                                <input type="submit" class="btn btn-success"  value="S'inscrire">
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>



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
                            <h5 class="text-muted mb-1 my-3"><strong>Victoires: </strong><?= htmlspecialchars($score[0]["victoires"]) ?></h5>
                            <h6 class="text-muted mb-1" data-mdb-toggle="tooltip" title="Le score total vous permet de débloquer de nouveaux emoji"><strong>Score total: </strong><?= htmlspecialchars($score[0]["score_total"]) ?></h6>
                            <h6 class="text-muted mb-1"><strong>Meilleur score: </strong><?= htmlspecialchars($score[0]["meilleur_score"]) ?></h6>

                            <a href="actions/deconnexion.php" class="btn btn-danger" >
                                <i class="fas fa-sign-out-alt"></i> Déconnexion
                            </a>
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
                       <form method="post" action="actions/emoji_win.php" >
                            <label class="emoji-preview-content">
                                <input type="radio" id="emoji_win" name="emoji_win" value="1"
                                    <?php if ($emoji_win_id == 1){echo "checked"; }?>>
                                <img class="emoji-preview emoji-preview-loose" src="assets/img/emoji_goal.gif" alt="Emoji goal">
                            </label class="emoji-preview-content">

                            <label class="emoji-preview-content">
                                <input type="radio" id="emoji_win" name="emoji_win" value="2"
                                    <?php if ($emoji_win_id == 2){echo "checked"; }?>
                                        <?php if($score[0]["score_total"] <= 4){echo "disabled";}?>>
                                <img class="emoji-preview emoji-preview-loose" src="assets/img/emoji_russian.gif" alt="Emoji russian">
                                <?php if ($score[0]["score_total"] <= 4) :?>
                                    <div class="emoji_score_unlock"><i class="fas fa-lock"></i> 5</div>
                                <?php endif;?>
                            </label>

                            <label class="emoji-preview-content">
                                <input type="radio" id="emoji_win" name="emoji_win" value="3"
                                    <?php if ($emoji_win_id == 3){echo "checked"; }?>
                                        <?php if($score[0]["score_total"] <= 9){echo "disabled";}?>>
                                <img class="emoji-preview" src="assets/img/emoji_money.gif" alt="Emoji money">
                                <?php if ($score[0]["score_total"] <= 9) :?>
                                    <div class="emoji_score_unlock"><i class="fas fa-lock"></i> 10</div>
                                <?php endif;?>
                            </label>

                            <label class="emoji-preview-content">
                                <input type="radio" id="emoji_win" name="emoji_win" value="4"
                                    <?php if ($emoji_win_id == 4){echo "checked"; }?>
                                        <?php if($score[0]["score_total"] <= 14){echo "disabled";}?>>
                                <img class="emoji-preview" src="assets/img/emoji_king.gif" alt="Emoji king">
                                <?php if ($score[0]["score_total"] <= 14) :?>
                                    <div class="emoji_score_unlock"><i class="fas fa-lock"></i> 15</div>
                                <?php endif;?>
                            </label>
                            <hr>

                           <input type="submit" class="btn btn-success"  value="Envoyer">
                       </form>

                    </div>



                    <!-- Affichage des EMOJI de défaite -->
                    <div class="collapse mt-3" id="collapseEmojiLoose">
                        <form method="post" action="actions/emoji_loose.php" >
                            <label  class="emoji-preview-content">
                                <input type="radio" id="emoji_loose" name="emoji_loose" value="1" <?php if ($emoji_loose_id == 1){echo "checked"; }?>>
                                <img class="emoji-preview emoji-preview-loose" src="assets/img/emoji_cat_angry.gif" alt="Emoji cat angry">
                            </label>

                            <label class="emoji-preview-content">
                                <input type="radio" id="emoji_loose" name="emoji_loose" value="2"
                                    <?php if ($emoji_loose_id == 2){echo "checked"; }?>
                                        <?php if($score[0]["score_total"] <= 4){echo "disabled";}?>>
                                <img class="emoji-preview emoji-preview-loose" src="assets/img/emoji_fight.gif" alt="Emoji fight">
                                <?php if ($score[0]["score_total"] <= 4) :?>
                                    <div class="emoji_score_unlock"><i class="fas fa-lock"></i> 5</div>
                                <?php endif;?>

                            </label>

                            <label  class="emoji-preview-content">
                                <input type="radio" id="emoji_loose" name="emoji_loose" value="3" <?php if ($emoji_loose_id == 3){echo "checked"; }?>
                                    <?php if($score[0]["score_total"] <= 9){echo "disabled";}?>>
                                <img class="emoji-preview emoji-preview-loose" src="assets/img/emoji_monster.png" alt="Emoji monster">
                                <?php if ($score[0]["score_total"] <= 9) :?>
                                    <div class="emoji_score_unlock"><i class="fas fa-lock"></i> 10</div>
                                <?php endif;?>
                            </label>

                            <label  class="emoji-preview-content">
                                <input type="radio" id="emoji_loose" name="emoji_loose" value="4" <?php if ($emoji_loose_id == 4){echo "checked"; }?>
                                    <?php if($score[0]["score_total"] <= 14){echo "disabled";}?>>
                                <img class="emoji-preview emoji-preview-loose" src="assets/img/emoji_ragequitte.gif" alt="Emoji rage quitte">
                                <?php if ($score[0]["score_total"] <= 14) :?>
                                    <div class="emoji_score_unlock"><i class="fas fa-lock"></i> 15</div>
                                <?php endif;?>
                            </label>
                            <hr>

                            <input type="submit" class="btn btn-success"  value="Envoyer">
                        </form>

                    </div>


                </div>

                <h2>Historique des parties</h2>
                <hr>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="font-weight-bold" scope="col">#</th>
                        <th class="font-weight-bold" scope="col">Joueur 1</th>
                        <th class="font-weight-bold" scope="col">Joueur 2</th>
                        <th class="font-weight-bold" scope="col">Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($historique_profile as $historique): ?>

                        <?php
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
                            <th scope="row"><?= $historique['id'] ?></th>
                            <td><?= $pseudo_id1[0] ?></td>
                            <td><?= $pseudo_id2[0] ?></td>
                            <td><?= $historique['score_j1'] ?> : <?= $historique['score_j2'] ?></td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </section>

<?php endif; ?>


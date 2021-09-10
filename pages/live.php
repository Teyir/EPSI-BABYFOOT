<div class="container py-5">
    <div class="row">

        <!-- Statistiques du joueur 1-->
        <div class="col-lg-2">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5 class="my-3">Statistiques du joueur 1</h5>
                    <h6 class="text-muted mb-1"><strong>Score total: <?= htmlspecialchars($statsJ1[0]["score_total"]) ?></strong></h6>
                    <hr>
                    <h6 class="text-muted mb-1"><strong>Meilleur score: <?= htmlspecialchars($statsJ1[0]["meilleur_score"]) ?></strong></h6>
                    <hr>
                    <h6 class="text-muted mb-1"><strong>Victoires: <?= htmlspecialchars($statsJ1[0]["victoires"]) ?></strong></h6>
                    <hr>
                    <h6 class="text-muted mb-1"><strong>Défaites: <?= htmlspecialchars($statsJ1[0]["defaites"]) ?></strong></h6>
                    <hr>

                </div>
            </div>
        </div>


        <!-- Live & score -->
        <div class="col-lg-8">
            <!-- Score -->
            <div class="mb-4 text-center">


            </div>

            <!-- Fenêtre live streaming -->
            <div class="card mb-10 text-center overlay-content">

                    <!-- Flux vidéo: http://192.168.43.235:8000/stream.mjpg -->
               <!-- <img src="assets/img/placeholder_stream.png">-->
                <img src="http://192.168.43.235:8000/stream.mjpg">

                <div class="overlay-background-top" id="overlay_score">
                    <h1><strong class="text-info"><?= htmlspecialchars($statsJ1[0]["score"]) ?></strong> - <strong class="text-secondary"><?= htmlspecialchars($statsJ2[0]["score"]) ?></strong></h1>
                </div>

                <!-- Joueur 1-->
                <div class="overlay-block-j1">
                    <img class="overlay-photo-profile rounded-circle img-fluid" src="assets/img/<?= htmlspecialchars($statsJ1[0]["image_profile"]) ?>"><br>
                    <span class="overlay-j1-pseudo"><?= htmlspecialchars($statsJ1[0]["pseudo"]) ?></span>
                </div>

                <!-- Joueur 2-->
                <div class="overlay-block-j2">
                    <img class="overlay-photo-profile rounded-circle img-fluid" src="assets/img/<?= htmlspecialchars($statsJ2[0]["image_profile"]) ?>"><br>
                    <span class="overlay-j2-pseudo"><?= htmlspecialchars($statsJ2[0]["pseudo"]) ?></span>
                </div>



            </div>

            <!-- Pseudo des joueurs 1 & 2-->
            <div class="mb-4 text-center">
                <h2><strong class="text-info"><?= htmlspecialchars($statsJ1[0]["pseudo"]) ?></strong> <small><i class="fas fa-trophy fa-xs"></i></small> <strong class="text-secondary"><?= htmlspecialchars($statsJ2[0]["pseudo"]) ?></strong></h2>

            </div>

        </div>

        <!-- Statistiques du joueur 2-->
        <div class="col-lg-2">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5 class="my-3">Statistiques du joueur 2</h5>
                    <h6 class="text-muted mb-1"><strong>Score total: <?= htmlspecialchars($statsJ2[0]["score_total"]) ?></strong></h6>
                    <hr>
                    <h6 class="text-muted mb-1"><strong>Meilleur score: <?= htmlspecialchars($statsJ2[0]["meilleur_score"]) ?></strong></h6>
                    <hr>
                    <h6 class="text-muted mb-1"><strong>Victoires: <?= htmlspecialchars($statsJ2[0]["victoires"]) ?></strong></h6>
                    <hr>
                    <h6 class="text-muted mb-1"><strong>Défaites: <?= htmlspecialchars($statsJ2[0]["defaites"]) ?></strong></h6>
                    <hr>

                </div>
            </div>
        </div>

    </div>

</div>

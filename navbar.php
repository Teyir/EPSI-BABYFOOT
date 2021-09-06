<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GF</a>
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_GET['page'] == 'accueil'){echo "active";} ?>" href="index.php?page=accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_GET['page'] == 'scoreboard'){echo "active";} ?>" href="index.php?page=scoreboard">Tableau des scores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_GET['page'] == 'profile'){echo "active";} ?>" href="index.php?page=profile">Profile</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
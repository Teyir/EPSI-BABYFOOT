<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="accueil">GF</a>
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
                    <a class="nav-link <?php if ($_GET['page'] == 'accueil'){echo "active";} ?>" href="accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_GET['page'] == 'scoreboard'){echo "active";} ?>" href="scoreboard">Tableau des scores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_GET['page'] == 'live'){echo "active";} ?>" href="live">Partie en direct</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_GET['page'] == 'profile'){echo "active";} ?>" href="profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_GET['page'] == 'partie'){echo "active";} ?>" href="partie">Mode partie</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
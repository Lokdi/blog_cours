<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Blog Maurice</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?op=qui-suis-je">Qui suis-je?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?op=mon-aventure">Voir mon aventure</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?op=contactMe">Me contacter</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i>
                        <?php if ((!empty($_SESSION['username']) && (!empty($_SESSION['email'])))): ?>
                            Bienvenue <?= $_SESSION['username'] ?>
                        <?php endif; ?>

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if ((!empty($_SESSION['username']) && (!empty($_SESSION['email'])))): ?>
                            <?php if (!empty($_SESSION['statut']) && $_SESSION['statut'] === 'Admin'): ?>
                            <li><a class="dropdown-item" href="?op=administration"><i class="fas fa-sliders-h fa-fw"></i> Se connecter au dashboard</a></li>
                            <?php endif; ?>
                                <!--                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i> Settings</a></li>-->
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="?op=account"><i class="fas fa-sliders-h fa-fw"></i> Mon compte</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="?op=disconnect"><i class="fas fa-sign-out-alt fa-fw"></i> Se deconnecter</a></li>
                        <?php elseif (empty($_SESSION)): ?>
                        <li><a class="dropdown-item" href="?op=register"><i class="fas fa-sign-in-alt fa-fw"></i> S'inscrire</a></li>
                        <li><a class="dropdown-item" href="?op=connect"><i class="fas fa-sign-in-alt fa-fw"></i> Se connecter</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
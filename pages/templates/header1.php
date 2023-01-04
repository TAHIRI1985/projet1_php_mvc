<header>
    <!-- place navbar here -->
    <nav class="navbar ">
        <div class=" topnavbar container-fluid">
            <button class="navbar-toggler bmenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start divmenu" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?p=home"><b>Acceuil</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>Cartes Cadeaux</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Bijoux</b>
                            </a>
                            <ul class="dropdown-menu bBijoux">
                                <li><a class="dropdown-item" href="index.php?p=posts.categorie&id=1">Collier</a></li>
                                <li>
                                    <a class="dropdown-item" href="index.php?p=posts.categorie&id=4">Bague</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="index.php?p=posts.categorie&id=2">B.d'orielle</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php?p=posts.categorie&id=3">Bracelet</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php?p=posts.categorie&id=6">Montre</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php?p=posts.categorie&id=5">B.cheville</a>
                                </li>






                            </ul>
                        </li>
                    </ul>
                    <br />
                    <div class="conn">
                        <ul>
                            <li>
                                <a class="connecte" href="index.php?p=login">Se connecte</a>
                            </li>
                            <li>
                                <a class="connecte" href="#">Créer un compte</a>
                            </li>
                            <li>
                                <a class="connecte" href="#">Contacter-nous</a>
                            </li>
                            <li>
                                <a class="connecte" href="#">Condition Générales</a>
                            </li>
                        </ul>
                    </div>
                    <br />
                    <br />

                    <footera class="sc">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <!-- </footera>
              <form class="d-flex mt-3" role="search">
                <input
                  class="form-control me-2"
                  type="search"S
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form> -->
                </div>
            </div>
            <img src="images/logo2.png" alt="logo" width="250" height="200" />
            <div>
                <span>
                    <a class="bsearch" href="#"><i class="fa-solid fa-magnifying-glass"></i> </a>
                </span>
                <span>
                    <a class="bpanier" href="#"><i class="fa-solid fa-bag-shopping"></i> <!--   <span class="notification"></span>-->
                        <span id="add" class="prixtotal">0 €</span>

                    </a>
                </span>
            </div>
        </div>




        </div>
        </div>
    </nav>
</header>
<div id="getFixed" class=" logobar container-fluid  ">

    <div class="row logo-bijoux">
        <?php



        foreach (App::getInstance()->getTable('Categorie')->all() as $categorie) : ?>
            <div class="col"><a href="<?= $categorie->url ?>">
                    <img src="<?= $categorie->image_Categorie ?>" alt="<?= $categorie->nom_Categorie ?>" width="50" height="50">
                    </br> <?= $categorie->nom_Categorie ?></a></div>
        <?php endforeach; ?>
    </div>

</div>
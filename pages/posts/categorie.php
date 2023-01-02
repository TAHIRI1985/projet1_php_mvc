<?php

$app = App::getInstance();


$categorie = $app->getTable('Categorie')->find($_GET['id']);
if ($categorie === false) {
    $app->notFound();
}


$articles = $app->getTable('Article')->lastByCategorie($_GET['id']);
$categories = $app->getTable('Categorie')->all();
// App::setTitle($categorie->nom_Categorie);
?>



<h2><?= $categorie->nom_Categorie ?></br></h2>

<div class=" divfieldset container-fluid">
    <div id="app" class="row justify-content-center  ">



        <?php foreach ($articles as $news) :  ?>


            <fieldset class=" acol-ms-12 col-md-5 col-lg-3 ">
                <article class="f1 ">

                    <img id="photo1" <?= $news->getImage1() ?> alt="bijoux" height="">

                </article>
                <button v-if="product.quantity>0" @click=" product.quantity -=1 ; product.count++ " class=" ajouter" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
                    </svg>
                </button>

                <article class="non">

                    <?= $news->getDescription() ?>
                    <?= $news->getQuantity() ?>

                    </br>
                    <span class="prix"> <?= $news->getPrix() ?> </span>
                    <br>
                    <a href="<?= $news->url ?>">
                        <button id="voirplus" type="button" class="btn btn-secondary ">Voir Plus</button>
                    </a>

                </article>
            </fieldset>

        <?php endforeach; ?>

    </div>
</div>

<a href="index.php?p=home" class="btn btn-warning button">Retourner à l'accueil</a>
<style>
    a.button {
        margin: 20px;
    }
</style>
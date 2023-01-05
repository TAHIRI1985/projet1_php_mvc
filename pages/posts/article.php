<?php
$app = App::getInstance();

$post = $app->getTable('Article')->findWithCategory($_GET['id']);
if ($post == false) {

    $app->notFound();
}

?>



<div class=" divfieldset container-fluid">
    <div id="app" class="row justify-content-center  ">
        <h4><?= $post->categorie ?></h4>
        <h5> <?= $post->getDescription() ?></h5>
        <h5><span class="prix"> <?= $post->getPrix() ?> </span></h5>

        <fieldset class=" acol-ms-12 col-md-5 col-lg-3 ">
            <article class="f1 ">


                <img id="photo1" <?= $post->getImage1() ?> alt="bijoux" height="">
                <img id="photo1" <?= $post->getImage2() ?> alt="bijoux" height="">
            </article>


        </fieldset>


    </div>
</div>

<a href="index.php?p=home" class="btn btn-warning   button">Retourner à l'accueil</a>
<style type="text/css">
    a.button {
        margin: 20px;
    }
</style>
<?php
$postTable = APP::getInstance()->getTable('Article');

if (!empty($_POST)) {


    $result = $postTable->update(
        $_GET['id'],

        [
            'nom_Article' => $_POST['nom_Article'],
            'image1_Article' => $_POST['image1_Article']
        ]
    );

    if ($resul) {
?>
        <div class=" alert alert-success"> L'article à bien été ajouté</div>

<?php

    }
}

$post = $postTable->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($post);

?>


<div class="container">
    <form method="post">
        <fieldset>


            <legend>Modifier l'article</legend>
            <div class="mb-3">

                <?= $form->input('nom_Article', 'Titre '); ?>
            </div>
            <div class="mb-3">

                <?= $form->input('description_Article', 'Description '); ?>
            </div>
            <div class="mb-3">

                <?= $form->input('prix_Article', 'Description '); ?>
            </div>
            <div class="mb-3">

                <?= $form->input('image1_Article', 'Description '); ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Modifier l'image</label>
                <div class="btn light-blue">
                    <input type="file" name="image1_Article">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate" readonly>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Souvegarder</button>


        </fieldset>
    </form>

</div>
<style>
    div.fildset {
        text-align: center;
    }
</style>
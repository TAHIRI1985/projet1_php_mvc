<?php
$table = APP::getInstance()->getTable('Categorie');

if (!empty($_POST)) {


    $result = $table->update(
        $_GET['id'],


        [
            'nom_Article' => $_POST['nom_Categorie'],
            'image_Categorie' => $_POST['image_Categorie'],

        ]
    );

    if ($result) {
?>
        <div class=" alert alert-success"> La catégorie à bien été modifièe</div>

<?php

    }
}



$categorie = $table->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($categorie);

?>



<form method="post">
    <h4>Modifièr la catégorie</h4>

    <?= $form->input('nom_Categorie', 'Titre '); ?>


    <?= $form->input('image_Categorie', 'Image ', ['type' => 'file']); ?>



    <button type="submit" class="btn btn-primary" name="edit_submit">Confirmer</button>

</form>
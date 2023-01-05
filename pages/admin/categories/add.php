<?php
$table = APP::getInstance()->getTable('Categorie');

if (!empty($_POST)) {


    $result = $table->create(

        [
            'nom_Article' => $_POST['nom_Categorie'],
            'image_Categorie' => $_POST['image_Categorie'],
        ]
    );

    if ($result) {
        header('location:admin.php?p=catergories.index');
    }
}




$form = new \Core\HTML\BootstrapForm($_POST);

?>



<form method="post">
    <h4>Modifièr la categorie</h4>

    <?= $form->input('nom_Categorie', 'Titre '); ?>
    <?= $form->input('image_Categorie', 'Image ', ['type' => 'file']); ?> <button type="submit" class="btn btn-primary" name="edit_submit">Confirmer</button>

</form>
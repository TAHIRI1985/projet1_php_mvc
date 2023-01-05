<?php
$postTable = APP::getInstance()->getTable('Article');

if (!empty($_POST)) {


    $result = $postTable->create(

        [
            'nom_Article' => $_POST['nom_Article'],
            'Quantité' => $_POST['Quantité'],
            'description_Article' => $_POST['description_Article'],
            'prix_Article' => $_POST['prix_Article'],
            'image1_Article' => $_POST['image1_Article'],
            'image2_Article' => $_POST['image2_Article'],
            'id_categories' => $_POST['id_categories']
        ]
    );

    if ($result) {
        header('location:admin.php?p=posts.edit&id=' . App::getInstance()->getPDO()->lastInsertId());
    }
}




$categories = App::getInstance()->getTable('Categorie')->extract('id', 'nom_Categorie');
$form = new \Core\HTML\BootstrapForm($_POST);

?>



<form method="post">
    <h1>Modifier l'article</h1>

    <?= $form->input('nom_Article', 'Titre '); ?>
    <?= $form->input('Quantité', 'Quantité '); ?>

    <?= $form->input('description_Article', 'Description '); ?>

    <?= $form->input('prix_Article', 'Prix '); ?>
    <?= $form->input('image1_Article', 'Image1 ', ['type' => 'file']); ?>
    <?= $form->input('image2_Article', 'Image2 ', ['type' => 'file']); ?>
    <?= $form->select('id_categories', 'Catégorie ', $categories); ?>


    <button type="submit" class="btn btn-primary" name="edit_submit">Confirmer</button>

</form>
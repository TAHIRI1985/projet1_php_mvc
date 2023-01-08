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
        header('location:admin.php?p=posts.edit&id=' . App::getInstance()->getDb()->lastInsertId());
    }
}




$categories = App::getInstance()->getTable('Categorie')->extract('id', 'nom_Categorie');
$form = new \Core\HTML\BootstrapForm($_POST);

?>



<form method="post">
    <h1>Ajouter l'article</h1>

    <form method=post>
        <fieldset>

            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="nom_Article" id="disabledTextInput" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantité</label>
                <input type="number" name="Quantité" id="disabledTextInput" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description_Article" id="disabledTextInput" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="text" name="prix_Article" id="disabledTextInput" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Image1</label>
                <input type="file" name="image1_Article" id="disabledTextInput" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Image2</label>
                <input type="file" name="image2_Article" id="disabledTextInput" class="form-control" required>
            </div>
            <?= $form->select('id_categories', 'Catégorie ', $categories); ?>
            <button type="submit" class="btn btn-primary">Publier</button>

        </fieldset>
    </form>

</form>
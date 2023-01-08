<?php
$table = APP::getInstance()->getTable('Categorie');

if (!empty($_POST)) {


    $result = $table->create(

        [
            'id' => $_POST['id'],
            'nom_Categorie' => $_POST['nom_Categorie'],
            'image_Categorie' => $_POST['image_Categorie'],
        ]
    );

    if ($result) {
        header('location:admin.php?p=categories.index');
    }
}




$form = new \Core\HTML\BootstrapForm($_POST);

?>



<form method="post">
    <h4>Ajouter la categorie</h4>
    <fieldset>
        <div class="mb-3">
            <label class="form-label">IdCategorie</label>
            <input type="text" name="id" id="disabledTextInput" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="nom_Categorie" id="disabledTextInput" class="form-control">
        </div>


        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image_Categorie" id="disabledTextInput" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Publier</button>

    </fieldset>

</form>
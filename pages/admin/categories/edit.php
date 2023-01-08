<?php
$table = APP::getInstance()->getTable('Categorie');

if (!empty($_POST)) {


    $result = $table->update(
        $_GET['id'],


        [

            'nom_Categorie' => $_POST['nom_Categorie'],
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
    <fieldset>

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="nom_Categorie" id="disabledTextInput" value="<?= $categorie->nom_Categorie  ?>" class="form-control">
        </div>


        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image_Categorie" id="disabledTextInput" value="<?= $categorie->image_Categorie  ?>" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Confirmer</button>

    </fieldset>


</form>
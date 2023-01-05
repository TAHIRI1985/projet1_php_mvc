<?php
$posts = App::getInstance()->getTable('Article')->all();


?>
<a class="btn btn-info" href="admin.php?p=home">Administrer les articles</a> <a class="btn btn-info" href="admin.php?p=categories.index">Administrer les categories</a>
<h1>Administrer les articles</h1>

<p><a href="?p=posts.add" class="btn btn-success">Ajouter</a></p>
<table class="table">

    <thead>
        <tr>

            <td>ID</td>
            <td>Titre</td>
            <td>Quantité</td>
            <td>Description</td>
            <td>Prix</td>
            <td>Image1</td>
            <td>Image2</td>

            <td>Actions</td>


        </tr>

    </thead>

    <tbody>

        <?php foreach ($posts as $post) : ?>
            <tr>
                <td>
                    <?= $post->id; ?>
                </td>
                <td>
                    <?= $post->nom_Article; ?>
                </td>
                <td>
                    <?= $post->Quantité; ?>
                </td>
                <td>
                    <?= $post->description_Article; ?>
                </td>
                <td>
                    <?= $post->prix_Article; ?>
                </td>
                <td><img src="<?= $post->image1_Article ?>" width="100" height="100" alt=""></td>
                <td><img src="<?= $post->image2_Article ?>" width="100" height="100" alt=""></td>


                <td>
                    <a href="?p=posts.edit&id=<?= $post->id; ?>" class="btn btn-primary">Editer</a>
                    <form action="?p=posts.delete" method="post" style="display : inline-block">
                        <input type="hidden" name="id" value="<?= $post->id; ?>">
                        <button type="submit" href="?p=posts.delete&id=<?= $post->id; ?>" class="btn btn-danger">Supprimer</button>
                    </form>



                </td>

            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?php
$posts = App::getInstance()->getTable('Article')->all();


?>
<h1>Administrer les articles</h1>


<table class="table">

    <thead>
        <tr>

            <td>ID</td>
            <td>Titre</td>
            <td>Image</td>
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
                <td><img src="<?= $post->image1_Article ?>" width="100" height="100" alt=""></td>
                <td>
                    <a href="?p=posts.edit&id=<?= $post->id; ?>" class="btn btn-primary">Editer</a>
                </td>

            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
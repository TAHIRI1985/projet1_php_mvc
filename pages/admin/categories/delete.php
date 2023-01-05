<?php
$postTable = APP::getInstance()->getTable('Categorie');

if (!empty($_POST)) {


    $result = $postTable->delete($_POST['id']);

    header('location:admin.php?p=categories.index');
}

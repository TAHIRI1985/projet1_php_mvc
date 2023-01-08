<?php
$categorie = APP::getInstance()->getTable('Categorie');

if (!empty($_POST)) {


    $result = $categorie->delete($_POST['id']);

    header('location:admin.php?p=categories.index');
}

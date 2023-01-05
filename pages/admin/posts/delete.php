<?php
$postTable = APP::getInstance()->getTable('Article');

if (!empty($_POST)) {


    $result = $postTable->delete($_POST['id']);

    header('location:admin.php');
}

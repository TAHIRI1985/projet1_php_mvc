<?php
define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';


App::load();

$app = App::getInstance();

$article = $app->getTable('Article');

var_dump($article->all());

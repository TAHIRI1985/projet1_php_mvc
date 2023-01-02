<?php

use \Core\Auth\DbAuth;




define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';

App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

$app = App::getInstance();
$auth = new DbAuth($app->getDb());
if (!$auth->logged()) {
    $app->forbidden();
}


ob_start();
if ($page === 'home') {

    require   ROOT . '/pages/admin/posts/index.php';
} elseif ($page === 'posts.article') {
    require ROOT . '/pages/admin/posts/article.php';
} elseif ($page === 'posts.categorie') {
    require ROOT . '/pages/admin/posts/categorie.php';
} elseif ($page === '404') {
    require  ROOT . '/pages/posts/not_found.php';
}


$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

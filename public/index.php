<?php
define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';

App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}





ob_start();
if ($page === 'home') {

    require   ROOT . '/pages/posts/home.php';
} elseif ($page === 'posts.article') {
    require ROOT . '/pages/posts/article.php';
} elseif ($page === 'posts.categorie') {
    require ROOT . '/pages/posts/categorie.php';
} elseif ($page === 'login') {
    require ROOT . '/pages/users/login.php';
} elseif ($page === '404') {
    require  ROOT . '/pages/posts/not_found.php';
}


$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

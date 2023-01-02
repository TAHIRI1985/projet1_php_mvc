<?php
define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';

App::load();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}





ob_start();
if ($p === 'home') {

    require   ROOT . '/pages/articles/home.php';
}


$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';

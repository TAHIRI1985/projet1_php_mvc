<?php





use Core\Config;


use Core\Database\MysqlDatabase;

class App
{
    public $title = "Bijoux Siam";
    private $db_instance;
    private static $_instance;


    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }
    public static function load()
    {
        session_start();

        require  ROOT . '/app/Autoloader.php';
        APP\Autoloader::register();

        require ROOT . '/core/Autoloader.php';
        core\Autoloader::register();
    }

    public  function getTable($name)
    {
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    public function getDb()
    {
        $config = config::getInstance(ROOT . '/config/config.php');
        if (is_null($this->db_instance)) {
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

    public static function notFound()
    {
        header("HTTP/1.0 4004 Not Found");
        header('location:index.php?p=404');
    }
    public static function getTitle()
    {
        return self::$title;
    }
    public static function setTitle($title)
    {
        self::$title = self::$title . ':' .    $title;
    }

    /**********************bac end */

    public function forbidden()
    {
        header('HTTP/1.0 403 Forbidden');
        die('Acces intedit');
    }
}

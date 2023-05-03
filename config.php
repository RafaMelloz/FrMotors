<?php
    session_start();
    $autoload = function ($class) {
        include('classes/' . $class . '.php');
    };

    spl_autoload_register($autoload);
     
    define('INCLUDE_PATH', 'http://localhost/CarProjct/');
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');
    define('BASE_DIR_PAINEL', __DIR__ . '/painel');


    //Conectar com banco de dados!
    define('HOST', 'Localhost');
    define('USER', 'root');
    define('PASSWORD', '150605R$fa');
    define('DATABASE', 'frmotors');




?>




<?php

    class Painel{
        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }

        public static function loggout()
        {
            session_destroy();
            header('Location:' . INCLUDE_PATH_PAINEL);
        }

        public static function carregarPagina()
        {
            if (isset($_GET['url'])) {
                $url = explode('/', $_GET['url']);
                if (file_exists('pages/' . $url[0] . '.php')) {
                    include('pages/' . $url[0] . '.php');
                } else {
                    header('Location' . INCLUDE_PATH_PAINEL);
                }
             } else {
              include('../painel/pages/home.php');
            }
        }

        public static function uploadFile($file)
        {
            $formatoArquivo = explode('.', $file['name']);
            $imagemNome = uniqid() . '.' . $formatoArquivo[count($formatoArquivo) - 1];
            if (move_uploaded_file($file['tmp_name'], BASE_DIR_PAINEL . '/uploads/' . $imagemNome))
            return $imagemNome;
            else
                return false;
        }
    }
    
?>
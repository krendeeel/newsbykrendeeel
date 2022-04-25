<?php

    class View {

        public function __construct() {
        }

        public function render($path,  $title, $props= [], $layout='default') {
            extract($props); //массив в переменные
            $directory= $_SERVER['DOCUMENT_ROOT'].'/view'.'/'.$path.'.php';
            if(file_exists($directory)){
                ob_start();
                require $directory;
                $content = ob_get_clean();
                require $_SERVER['DOCUMENT_ROOT'].'/view/layout/'.$layout.'.php';
            } else {
                echo '123';
            }
           
        }

        public static function redirect($url){
            header('location: '.$url);
            exit;
        }

        public static function errorPage($code) {
            http_response_code($code);
            require $_SERVER['DOCUMENT_ROOT'].'/view/errors/'.$code.'.php';
            exit;
        }
    }
    
?>
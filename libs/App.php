<?php

class App {
    public function __construct() {
        if(isset($_GET['url'])) { // проверка существования адреса
            $url = explode('/', rtrim($_GET['url'], '/'));  //получение полного адреса
        } else {
            $url[0] = 'index';
        }
        
        $file_name = 'controllers/'.$url[0].'.php'; // определение контроллера
    
        if(file_exists($file_name)) {
            require_once $file_name; // подключение контроллера
            $controller = new $url[0]; // инициализация контроллера
    
            if(isset($url[1])) { 
                if(method_exists($controller, $url[1])) { // проверка существования метода
                    $controller->{$url[1]}(); //вызов метода
                } 
                else {
                    return View::errorPage(404);
                }
            } else {
                $controller->index();
            }
        } else {
            return View::errorPage(404);
        }
    }
}



?>
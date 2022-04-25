<?php

    class Database extends PDO {
        public function __construct() {
           parent::__construct(DB_CONNECTION.':dbname='.DB_DATABASE.';host='.DB_HOST.';port='.DB_PORT.';charset=UTF8', DB_USERNAME, DB_PASSWORD);
        }

        public function index(){
            $this->view->render(strtolower(get_class($this)));
        }
    }

?>

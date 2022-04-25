<?php
    class Index extends Controller {
        public function __construct() {
            parent::__construct();
            View::redirect('/news');
        }
    }
?>
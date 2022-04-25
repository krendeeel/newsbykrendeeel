<?php
    class News extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $page = $_GET['page'] ?  $_GET['page'] : '1';
            $data = $this->model->getCurrentPage($page);
            if(!$data['news'][0]) {
                return View::errorPage(404);
            }
            $props = [
                'news' => $data['news'],
                'pages' => $data['pages'],
                'currentPage' => $page,
            ];
            $this->view->render('news', 'Новости', $props );
        }

        public function view() {
            $id = $_GET['id'] ?  $_GET['id'] : '1';
            $news = $this->model->getOneNews($id);
            if(!$news[0]) {
                return View::errorPage(404);
            }
            $props = [
                'news' => $news[0],
            ];
            $this->view->render('view', htmlspecialchars_decode($news[0]['title']), $props);
        }
    }

?>
<?php

    class NewsModel extends Model {

        protected $pages;

        public function __construct() {
            parent::__construct();
        }

        public function getPages($countOnPage) {
            $resualt = $this->db->query('SELECT COUNT(*) FROM news');
            $data = $resualt->fetch();
            $this->pages = ceil($data[0] / $countOnPage);
            return $this->pages;
        }

        public function getCurrentPage($page, $countOnPage = 4){
            if(!$pages) {
                $this->getPages($countOnPage);
            }
            $end = $page * $countOnPage;
            $start =  $end - $countOnPage;
            $resualt = $this->db->query('SELECT * FROM news ORDER BY idate DESC LIMIT '. $start.', '.$countOnPage);
            $data = $resualt->fetchAll(PDO::FETCH_ASSOC);
            $info = [
                'news' => $data,
                'pages' => $this->pages,
            ];
            return $info;
        }

        public function getOneNews($id){
            $resualt = $this->db->query('SELECT * FROM news WHERE id='.$id);
            $data = $resualt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

    }
    
?>
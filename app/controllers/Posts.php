<?php
    class Posts extends Controller{
        
        
        public function index(){
            $data = [];
            $this->view('post/index', $data);
        }
    }
?>
<?php
  class DefaultController extends Controller {
    public function __construct(){
        $this->defaultmodel = $this->model('DefaultModel');
    }
    
    public function index(){
            var_dump($this->defaultmodel->findAll('posts'));die;

    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
  }
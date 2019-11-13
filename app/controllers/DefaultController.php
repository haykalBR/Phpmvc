<?php
  class DefaultController extends Controller {
    public function __construct(){
        $this->defaultmodel = $this->model('DefaultModel');
    }
    
    public function index(){
        var_dump($_SERVER["REQUEST_URI"]);die;
            var_dump($this->defaultmodel);die;

    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
  }
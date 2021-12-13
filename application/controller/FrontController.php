<?php

namespace application\controller;
use application\core\Controller;
use application\model\Book; 

require_once '..\application\model\Book.php';
require_once '..\application\core\Controller.php';


class FrontController extends Controller{

    public function __construct()
    {
       
        parent::__construct();
    }
    public function index()
    {
        $this->View->renderFront('front/index',array('books'=> Book::showBook()));
        
    }


    
}
<?php

namespace application\controller;
use application\core\Controller;
use application\model\LoginModel;

require_once '..\application\model\Book.php';
require_once '..\application\core\Controller.php';
require_once '..\application\model\LoginModel.php';

class RegisterController extends Controller{

    public function __construct()
    {
       
        parent::__construct();
    }
    public function index()
    {
        $this->View->renderLogin('register/index');
        
    }

    public static function handelCreate(){

        //getting the post methods values from the login form
        $user_name = self::formInputValue('create_user');
        $password = self::formInputValue('create_pass');   
        $hashed_pass=password_hash($password,PASSWORD_DEFAULT);
        LoginModel::createUser($user_name,$hashed_pass);
        echo json_encode( $returnData = array("status"=>"$user_name.Created in the database"));
    }

    static function formInputValue($value){
        $textbox = $_POST[$value];
        if(empty($textbox)){
            return false;
        }else{
            return $textbox;
        }
    }
    
}
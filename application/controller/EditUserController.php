<?php

namespace application\controller;
use application\core\Controller;
use application\model\LoginModel;

require_once '..\application\core\Controller.php';
require_once '..\application\model\LoginModel.php';

class EditUserController extends Controller{

    public function __construct()
    {
       
        parent::__construct();
    }
    
    public function index()
    {
        
        $this->View->renderEditUser('edituser/index',array('books'=> LoginModel::showUsers()));
        
    }

    public static function handleEdit(){
        $user_id = self::formInputValue('user_id');
        $user_name = self::formInputValue('user_name');

        if(isset($_POST['update'])){
            LoginModel::updateUser($user_name,$user_id);
            echo 'user is updated';

        }elseif(isset($_POST['delete'])){
            LoginModel::DeleteUser($user_id);
            echo 'user deleted';
        }elseif(isset($_POST['deleteAll'])){
            LoginModel::DeleteAllUsers();
            echo 'deleted all users ';

        }else{
            echo 'no button is selected';
        }
        
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
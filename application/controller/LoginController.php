<?php

namespace application\controller;
use application\core\Controller;
use application\model\LoginModel;

require_once '..\application\model\Book.php';
require_once '..\application\model\LoginModel.php';
require_once '..\application\core\Controller.php';


class LoginController extends Controller{

    public function __construct()
    {
       
        parent::__construct();
    }
    public function index()
    {
        $this->View->renderLogin('login/index');
        
    }

    public static function handelLogin(){

        //getting the post methods values from the login form
        $user_name = self::formInputValue('userName');
        $password = self::formInputValue('password'); 
     
        //to check if the form is not empty
            if(!empty($user_name)&&!empty($password)){

                //to fetch the valid users from the username database    
                $user= LoginModel::loginUser($user_name);
                $admin= LoginModel::loginAdmin($user_name);

                $url='';
                $status='';
                $err='';
                $role='';
            
                foreach($user as $key => $value){
                    //console_log( $value["id"]);
                    $valid_user=$value["name"];
                    $valid_pass=$value["password"];
                    if($valid_user==$user_name){

                        if(password_verify($password,$valid_pass)){
                            //header('http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/admin/index');
                            
                            $status="true";
                            $url="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/front/index";
                            $role="user";
                            $err="WELCOME USER";

                            $_SESSION['userName']=$user_name;
                            foreach($admin as $key =>$elemtent){
                                $valid_admin=$elemtent['name'];

                                //console_log($valid_admin);
                                if($valid_admin==$user_name){

                                   $_SESSION['adminName']='admin';
                                    $status="true";
                                    $url="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/admin/index";
                                    $role="admin";
                                    $err="WELCOME ADMIN";
                                    //console_log('valid admin name'.$valid_admin);
                                }
                                
                            }
                                    
                        }else{  

                            $status="false";
                        }
                    }else{
                        $status="USENAME not found";
                    }
                } 

                echo json_encode( $returnData = array("status"=>$status, "role"=>$role, "url"=>$url,"err"=>$err)) ;
            }else{
                echo 'Fill the Form';
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
    public static function logout(){
        session_destroy();
        header('Location: http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/login/index');
    }
}
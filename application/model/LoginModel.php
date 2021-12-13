<?php
namespace application\model;

use  application\core\DatabaseFactory;
require_once '..\application\core\DataBaseFactory.php';

class LoginModel{
   public static function loginUser($userName)
   {
      return DatabaseFactory::getFactory()->query('SELECT * from user WHERE name=?',$userName)->fetchAll();
   }

   public static function loginAdmin($adminName)
   {
      return DatabaseFactory::getFactory()->query('SELECT * from usertoroletbl WHERE name=?',$adminName)->fetchAll();
   }
   public static function createUser($new_user,$new_pass)
   {
      return DatabaseFactory::getFactory()->query("INSERT INTO user (name,password) VALUES (?,?)",$new_user,$new_pass);
   }
   public static function showUsers():array
   {
      return DatabaseFactory::getFactory()->query('SELECT * from user')->fetchAll();
   }
   public static function updateUser($user_name,$user_id){
      DatabaseFactory::getFactory()->query("UPDATE user SET name=? WHERE id=?",$user_name,$user_id);
   }
   
   public static function DeleteUser($user_id){
      DatabaseFactory::getFactory()->query("DELETE FROM user WHERE id=?",$user_id);
  }

  /* function to delete all the books */

  public static function DeleteAllUsers(){
      DatabaseFactory::getFactory()->query("DELETE FROM user");
  }

}
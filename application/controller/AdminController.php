<?php

namespace application\controller;
use application\core\Controller;
use application\core\DatabaseFactory;
use application\model\Book;

require_once '..\application\model\Book.php';
require_once '..\application\core\Controller.php';
require_once '..\application\core\DatabaseFactory.php';

class AdminController extends Controller{

    public function __construct()
    {
       
        parent::__construct();
    }
    public function index()
    {
        $this->View->renderAdmin('admin/index',array('books'=> Book::showBook()));
        
    }

    public static function handleRequest(){
       
       /* getting all the data form AJAX  */

        $book_id = self::formInputValue('book_id');
        $book_title = self::formInputValue('book_title');
        $book_cover = self::fileUpload($book_title);
        $book_date = self::formInputValue('book_date');
        $book_link = self::formInputValue('book_link');
        $book_desc = self::formInputValue('book_desc');
        $book_price = self::formInputValue('book_price');
        $book_pages = self::formInputValue('book_pages');
        $book_author = self::formInputValue('book_author');
        $valid_link=!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$book_link);

        /* action according to button clicked */

        if(isset($_POST['create'])){

            /** form validation */

            if ($valid_link) {  
                $websiteErr = "URL is not valid";  
                echo $websiteErr;  
            }elseif(!is_numeric($book_price)){
                echo 'invalid book price';
            } else {  
                Book::createBook($book_desc,$book_title, $book_pages,$book_price, $book_author, $book_date,$book_link,$book_cover);
                echo "New book created";  
            }  

        }elseif(isset($_POST['update'])){

            /** form validation */
            if ($valid_link) {  
                $websiteErr = "URL is not valid";  
                echo $websiteErr;  
            }elseif(!is_numeric($book_price)){
                echo 'invalid book price';
            }else{
                Book::updateBook($book_desc,$book_title, $book_pages,$book_price, $book_author, $book_date,$book_link,$book_cover,$book_id);
                echo 'Book is updated';
            }
            
        }elseif(isset($_POST['delete'])){
            Book::DeleteBook($book_id);
            echo 'Book deleted';
        }elseif(isset($_POST['deleteAll'])){
            Book::DeleteAllBooks();
            echo 'delete all books';
        }else{
            echo 'no button is selected';
        }
        
        
    }

    /* function check all the Post input values */

    static function formInputValue($value){
        $textbox = $_POST[$value];
        if(empty($textbox)){
            return false;
        }else{
            return $textbox;
        }
    }

    /* to upload the image file */

    static function fileUpload($bookName): string{
        $directory=realpath(dirname(__FILE__,3)) . '/public/img/';
         
       // console_log($bookName);
        $bookCoverName=sha1($bookName.time());
        $bookCover="avatar.jpg";
        if($_FILES['book_cover']['tmp_name']!==""){
           // console_log("i ma inside if");
            $tmp = $_FILES['book_cover']['tmp_name'];
           // console_log($tmp);
            $fileToAdd = $_FILES['book_cover']['name']; //R.png
            $extension = strrchr($fileToAdd,'.');
            @move_uploaded_file($tmp,$directory.$bookCoverName.$extension);
           // console_log(@move_uploaded_file($tmp,$directory.$bookCoverName.$extension));
            @unlink($tmp);
            if($_FILES['book_cover']['name'] !== "avatar.jpg") {
                $bookCover = $bookCoverName.$extension;
            }
        }
        
        return $bookCover;
    }
}
<?php
namespace application\model;

use  application\core\DatabaseFactory;
require_once '..\application\core\DataBaseFactory.php';


class Book{

    /* function to show all the list of books */
    public static function showBook():array
    {
       return DatabaseFactory::getFactory()->query('SELECT * from book')->fetchAll();
    }
   
    /* function to create a book */
    public static function createBook($new_desp,$new_title,$new_page,$new_price,$new_author,$new_date,$new_link,$book_cover){

        DatabaseFactory::getFactory()->query("INSERT INTO book (description,title,pages_count,price,authors,date_published,link,cover) VALUES (?,?,?,?,?,?,?,?)",
        $new_desp,$new_title,$new_page,$new_price,$new_author,$new_date,$new_link,$book_cover);

    }
    /* function to update a book */

    public static function updateBook($new_desp,$new_title,$new_page,$new_price,$new_author,$new_date,$new_link,$book_cover,$book_id){
        DatabaseFactory::getFactory()->query("UPDATE book SET description=?,title=?,pages_count=?,price=?,authors=?,date_published=?,link=?,cover=? WHERE id=?",
        $new_desp,$new_title,$new_page,$new_price,$new_author,$new_date,$new_link,$book_cover,$book_id);
    }

    /* function to delete a book */

    public static function DeleteBook($book_id){
        DatabaseFactory::getFactory()->query("DELETE FROM book WHERE id=?",$book_id);
    }

    /* function to delete all the books */

    public static function DeleteAllBooks(){
        DatabaseFactory::getFactory()->query("DELETE FROM book");
    }
}
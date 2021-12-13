<div id="cardsContainer" class="cardsContainer">
    <h1>List of Books</h1>
     
    <div id="memberCard" class="memberCard">
        <?php foreach ($this->books as $book) { ?>
                            <div class="card"   id="card">
                                <div id="imgContent">
                                <img id="img" src="<?=\application\core\Config::get('URL')."img/".$book['cover']; ?>"  width="200px" height="180px" alt=<?= $book['title']; ?>>
                                </div>    
                                <div id = "bookContent">
                                    <p>Title: <?= $book['title']; ?></p>
                                    <p>Authors: <?= $book['authors']; ?></p>     
                                    <p>Published: <?= $book['date_published']; ?></p>
                                    <p>Page:<?= $book['pages_count']; ?></p>
                                    <p>Price: <?= $book['price']; ?></p>
                                    <p>Link:<a href=<?= $book['link']; ?>>Amazon link</a></p>  
                                    <p>Description: <?= $book['description']; ?></p>
                                    
                                </div>    
                            </div>
        <?php } ?>
    </div>
</div>

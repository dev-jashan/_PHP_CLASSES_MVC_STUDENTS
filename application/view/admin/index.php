
<script>
  $( function() {
    $( "#date" ).datepicker();
  } );
  </script>

<h2> BOOKSTORE </h2>

    <!-- creating the form -->

    <div class="formErr" id="formErr"></div>
    <div class="container text-center">
        <div class="d-flex justify-content-center">
            <form id="formBooks" class="formBooks" enctype="multipart/form-data" action="" method="POST">
                <div class="row pt-2" id="showId">
                    <div class="col">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend" >
                            <div class="input-group-text bg-warning"><i class='fas fa-id-badge formIcons'></i></div>
                        </div>
                        <input type=number min="1"  name='book_id' value='' autocomplete="off" placeholder='ID' class="form-control" id="id">
                    </div>
                </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend" >
                                <div class="input-group-text bg-warning"><i class='fas fa-book formIcons'></i></div>
                            </div>
                            <input type=text name='book_title' value='' autocomplete="off" placeholder='Title' class="form-control" id="title">
                        </div>   
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col" >
                        <div class="input-group mb-2">
                                <div class="input-group-prepend" >
                                    <div class="input-group-text bg-warning"><i class='far fa-clock formIcons'></i></div>
                                </div>
                                <input type='text' name='book_date' value='' autocomplete="off" placeholder='Date' class="form-control datepicker" id="date" data-date-format='yyyy/mm'>
                            </div>   
                        </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend" >
                                <div class="input-group-text bg-warning"><i class='fas fa-user-edit formIcons'></i></div>
                            </div>
                            <input type=text name='book_author' value='' autocomplete="off" placeholder='Author' class="form-control" id="author">
                        </div>   
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend" >
                                <div class="input-group-text bg-warning"><i class='fas fa-stopwatch formIcons'></i></div>
                            </div>
                            <input type=text name='book_pages' value='' autocomplete="off" placeholder='Pages' class="form-control" id="pages" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/[^0-9]/g, '$1');" >
                        </div>   
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend" >
                                <div class="input-group-text bg-warning"><i class='fas fa-stopwatch formIcons'></i></div>
                            </div>
                            <input type=text name='book_price' value='' autocomplete="off" placeholder='Price' class="form-control" id="price" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                        </div>  
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend" >
                                <div class="input-group-text bg-warning"><i class='fas fa-store formIcons'></i></div>
                            </div>
                            <input type=text name='book_link' value='' autocomplete="off" placeholder='Link' class="form-control" id="link">
                        </div> 
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="input-group mb-2">
                                <div class="input-group-prepend" >
                                    <div class="input-group-text bg-warning"><i class='fas fa-image formIcons'></i></div>
                                </div>
                                <input type=file name='book_cover' value='' autocomplete="off" placeholder='Cover' class="form-control" id="cover">
                            </div> 
                    </div>
                <div class="row pt-2" style="padding-top: 0">
                    <div class="col">
                    <div class="input-group mb-2">
                                <div class="input-group-prepend" >
                                    <div class="input-group-text bg-warning"><i class='fas fa-info-circle formIcons'></i></div>
                                </div>
                                <textarea type=text name='book_desc' value='' autocomplete="off" placeholder='Description' class="form-control" id="desc"></textarea>
                            </div> 
                    </div>
                    </div>
                </div>

                <!-- creating CRUD buttons inside the form -->

                <div class="d-flex justify-content-center">
                    <button name='create' data-toggle='tooltip' data-placement='bottom' title='Create' class='btn btn-success' id='submitBtn'><i class='fas fa-plus'></i></button>
                    <button name='read' data-toggle='tooltip' data-placement='bottom' title='Read' class="btn btn-primary" id='submitBtn'><i class='fas fa-sync'></i></button>
                    <button name='update' data-toggle='tooltip' data-placement='bottom' title='Update' class="btn btn-light border" id='submitBtn'><i class='fas fa-pen-alt'></i></button>
                    <button name='delete' data-toggle='tooltip' data-placement='bottom' title='Delete' class="btn btn-danger" id='submitBtn'><i class='fas fa-trash-alt'></i></button>
                    <button name='deleteAll' data-toggle='tooltip' data-placement='bottom' title='Drop Table' class="btn btn-light border" id='submitBtn'><i class='fas fa-trash'></i>Delete All</button>
                </div>
            </form>
        </div>

        <!-- creating table for the books -->

        <div id="bookTable" class="bookTable">   
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th><th>Title</th><th>Date</th><th>Author</th><th>Pages</th>
                        <th>Price</th><th>Link</th><th>Description</th><th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                <?php foreach ($this->books as $book) { ?>
                <tr>
                    <td id="idTbl"  data-id="book_id" ><div data-name="book_id"><?= $book['id']; ?></div></td>
                    <td id="titleTbl" data-id="book_title" ><div data-name="book_title"><?= $book['title']; ?></td>
                    <td id="authorTbl" data-id="book_author" ><div data-name="book_author"><?= $book['authors']; ?></div></td>
                    <td id="dateTbl" data-id="date_published" ><div data-name="book_date"><?= $book['date_published']; ?></div></td>
                    <td id="pageTbl" data-id="book_pages" ><div data-name="book_pages"><?= $book['pages_count']; ?></div></td>
                    <td id="priceTbl" data-id="book_price" ><div data-name="book_price"><?= $book['price']; ?></div></td>
                    <td id="linkTbl" data-id="book_link" ><div data-name="book_link" href=<?= $book['link']; ?> ><?= $book['link']; ?></div></td>
                    <td id="descriptionTbl" data-id="book_id" ><div data-name="book_desc"><?= $book['description']; ?></div></td>
                    <td id="edit"><i class='fas fa-edit btnedit'></i></td>
                </tr>        
                <?php } ?>               
                </tbody>
            </table>          
        </div>
    </div>
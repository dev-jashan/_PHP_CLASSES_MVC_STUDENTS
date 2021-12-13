<h2> EDIT USER </h2>

    <!-- creating the form -->

    <div class="formErr" id="formErr"></div>
    <div class="container text-center">
        <div class="d-flex justify-content-center">
            <form id="formUsers" class="formUsers" enctype="multipart/form-data" action="" method="POST">
                <div class="row pt-2" id="showId">
                    <div class="col">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend" >
                            <div class="input-group-text bg-warning"><i class='fas fa-id-badge formIcons'></i></div>
                        </div>
                        <input type=number min="1"  name='user_id' value='' autocomplete="off" placeholder='user ID' class="form-control" id="userId">
                    </div>
                </div>
                <div class="row pt-2" style="padding-top: 0">
                    <div class="col">
                    <div class="input-group mb-2">
                                <div class="input-group-prepend" >
                                    <div class="input-group-text bg-warning"><i class='fas fa-info-circle formIcons'></i></div>
                                </div>
                                <textarea type=text name='user_name' value='' autocomplete="off" placeholder='USERNAME' class="form-control" id="userName"></textarea>
                            </div> 
                    </div>
                    </div>
                </div>

                <!-- creating CRUD buttons inside the form -->

                <div class="d-flex justify-content-center">
                    
                    <button name='read' data-toggle='tooltip' data-placement='bottom' title='Read' class="btn btn-primary" id='submitBtn'><i class='fas fa-sync'></i><br>READ</button>
                    <button name='update' data-toggle='tooltip' data-placement='bottom' title='Update' class="btn btn-light border" id='submitBtn'><i class='fas fa-pen-alt'></i></button>
                    <button name='delete' data-toggle='tooltip' data-placement='bottom' title='Delete' class="btn btn-danger" id='submitBtn'><i class='fas fa-trash-alt'></i> <br></button>
                    <button name='deleteAll' data-toggle='tooltip' data-placement='bottom' title='Drop Table' class="btn btn-light border" id='submitBtn'><i class='fas fa-trash'></i>Delete All users</button>
                </div>
            </form>
        </div>

        <!-- creating table for the books -->
        <div id="bookTable" class="bookTable">   
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th> ID</th><th>Username</th><th>Edit</th>
                    </tr>
                    <tbody id="tbody">
                <?php foreach ($this->books as $book) { ?>
                <tr>
                    <td id="idTbl"  data-id="user_id" ><div data-name="user_id"><?= $book['id']; ?></div></td>
                    <td id="titleTbl" data-id="user_name" ><div data-name="user_name"><?= $book['name']; ?></div></td>
                    <td id="edit"><i class='fas fa-edit btnedit'></i></td>
                </tr>        
                <?php } ?>               
                </tbody>
                </thead>
            </table>          
        </div>
    </div>
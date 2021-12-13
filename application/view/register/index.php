

<div class="loginForm" id="createForm">
        <h1 id="userTitle">Create User</h1>
        <div id="loginErr"><p id="showUser"></p></div>
		<form action="" method="POST"  id="registerForm" enctype="multipart/form-data">
            <div class="row pt-2">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend" >
                                <div class="input-group-text bg-warning"><i class='fas fa-book formIcons'></i></div>
                            </div>
                            <input type=text name='create_user' value='' autocomplete="off" placeholder='YOUR USERNAME' class="form-control" id="userCreate">
                        </div>   
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend" >
                                <div class="input-group-text bg-warning"><i class="fas fa-lock"></i></div>
                            </div>
                            <input type="password" name='create_pass' value='' autocomplete="off" placeholder='PASSWORD' class="form-control" id="createPass">
                        </div>   
                    </div>
                </div>
			<div class="input-group" id="submitUser">	
                <button name='logoutKey' data-toggle='tooltip' data-placement='bottom' title='Logout' class='btn btn-success' id='loginBtn'><i class="fas fa-key"></i></button>
			</div>
			<p class="login-register-text" id="linkStyle"> click if you are <a href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/login/index">Already a user?</a>.</p>
		</form>
</div>
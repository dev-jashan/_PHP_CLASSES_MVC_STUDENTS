
<div class="loginForm" id="loginForm">
        <h1 id="userTitle">USER LOGIN</h1>
        <div id="loginErr"><p id="loginShow"></p></div>
		<form action="" method="POST"  id="userForm" enctype="multipart/form-data">
            <div class="row pt-2">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend" >
                                <div class="input-group-text bg-warning"><i class='fas fa-book formIcons'></i></div>
                            </div>
                            <input type=text name='userName' value='' autocomplete="off" placeholder='Username' class="form-control" id="userName">
                        </div>   
                    </div>
                </div>
                
                <div class="row pt-2">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend" >
                                <div class="input-group-text bg-warning"><i class="fas fa-lock"></i></div>
                            </div>
                            <input type="password" name='password' value='' autocomplete="off" placeholder='Password' class="form-control" id="password">
                        </div>   
                    </div>
                </div>
			<div class="input-group" id="submitUser">	
                <button name='loginKey' data-toggle='tooltip' data-placement='bottom' title='Login' class='btn btn-success' id='loginBtn'><i class="fas fa-key"></i></button>
			</div>
			<p class="login-register-text" id="linkStyle">Dont have an account? <a href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/register/index">register Here ?</a>.</p>
		</form>
	</div>
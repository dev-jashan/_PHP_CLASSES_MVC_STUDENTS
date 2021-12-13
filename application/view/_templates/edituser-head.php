<?php 
    $root_url=\application\core\Config::get('URL');
?>
<!doctype html>
<html>
<head>
    <title>BookStore</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/css/nav.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/css/cards.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/css/btn.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/css/book-stack-32.ico" />
    <link rel="stylesheet" href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/css/styles.css" />
    <link href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/css//fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">

    
    <script src="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/js/jquery.min.js"></script>
    <script src="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/js/loginForm.js"></script>
    <script src="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/assets/js/edituser.js"></script>
</head>
<body>
    
    <!-- wrapper, to center website -->
    <div class="wrapper">

        <!-- navigation -->
        <div id="navContainer">
        <nav id="nav">
            <div id="storeLogo">
                <p id="logo">BOOK <i class="fas fa-book"></i> STORE</p>
            </div>
            <div id="linksContainer">
                <div id="indexContainer">
                    <li id="login"><a href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/login/logout">Logout</a></li>
                </div>
                <div id="indexContainer">
                    <li id="login"><a href="http://127.0.0.1:8080/php/_PHP_CLASSES_MVC_STUDENTS/admin/index">back</a></li>
                </div>
            </div>
        </nav>
    </div>
     
      
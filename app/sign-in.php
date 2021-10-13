<?php
    include 'database/mysqli.php';
    include 'common/settings.php';
    include 'language/bg.php';
?>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title><?=$software['software_name'];?> : <?=$software['software_company'];?></title>
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" >
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="../assets/images/logo.png" alt="wrapkit" class="img-fluid">
                        </div>
                        <h2 class="mt-3 text-center"><?=$lang['login_heading_text'];?></h2>
                        <?php
                            if($_GET['message'] == 'error'){
                                echo '<p class="text-center">Невалиден e-mail адрес или парола!</p>';
                            }
                        ?>
                        <form class="mt-4" method="POST" action="sign-functions">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname"><?=$lang['login_email_address'];?></label>
                                        <input class="form-control" id="uname" name="email_address" type="text"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd"><?=$lang['login_password'];?></label>
                                        <input class="form-control" id="pwd" name="password" type="password"
                                            placeholder="*********">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <input type="submit" name="login" value="<?=$lang['login_heading_text'];?>" class="btn btn-block btn-dark">
                                   
                                </div>
                                <div></div>
                                <!--<div class="col-lg-12 text-center mt-5">
                                    Don't have an account? <a href="#" class="text-danger">Sign Up</a>
                                </div>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>
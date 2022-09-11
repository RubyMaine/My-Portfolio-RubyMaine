<?php
require('../include/connection_db.php');
if(isset($_POST['login'])){
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $query = "SELECT * FROM superadmin WHERE mail='$mail' && password='$password'";
    $run = mysqli_query($connection_db, $query);
    $data = mysqli_fetch_array($run);
    if(count($data)>0){
        $_SESSION['isUserLoggedIn']=true;
        $_SESSION['mailId'] = $_POST['mail'];
        echo "<script>window.location.href='index.php';</script>";
    }else{
        echo "<script>alert('Неверный адрес электронной почты или пароль!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en-US,ru-RU,uz-UZ">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <link href="assets/img/favic.png" rel="icon" />
        <title> Log In | MyRubyMaine</title>
        
        <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0" />
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
        <link rel="stylesheet" href="css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary" style="border-top: 3px solid #007bff;box-shadow: 0px 0px 50px 30px rgb(0 0 0 / 16%);">
                <div class="card-header text-center">
                    <a href="http://my.portfolio/" class="h1"><b><img src="dist/img/adminlogo.png" alt="logo"><br> My RubyMaine </b></a>
                </div>
                <div class="card-body" style="padding: 1.25rem 1.25rem 0 1.25rem;">
                    <p class="login-box-msg"> Admin Panel | My Portfolio</p>
                    <form method="post">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input class="form-control" required type="email" name="mail" placeholder="Введите (электронной почту)" />
                        </div>
                        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                            </div>
                            <input class="form-control" required type="password" name="password" placeholder="Правильно введите (пароль)" />
                        </div>
                        
                        <div class="row" style="display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -19.5px;margin-left: -19.5px;">
                            <div class="card-footer container-fluid">
                                <button class="btn btn-success container-fluid" type="submit" name="login"> Войти в AdminPanel <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dist/js/adminlte.min.js?v=3.2.0"></script>
    </body>
</html>

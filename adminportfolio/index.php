<?php
require('../include/connection_db.php');
if(!isset($_SESSION['isUserLoggedIn'])){
  echo "<script>window.location.href='login.php';</script>";
}
$query = "SELECT * FROM home,contact,container_sections,social_networks,about,personal_info,skills,site_background,seo_optimization,superadmin";
$run = mysqli_query($connection_db, $query);
$user_data = mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <link href="dist/img/adminlogo.png" rel="icon">
        <title> AdminPanel | MyRubyMaine </title>

        <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
        <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0" />
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
        <link rel="stylesheet" href="../../ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
        <link rel="stylesheet" href="../../css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="dist/img/favic.png" alt="AdminLTELogo" height="100" width="100" />
            </div>

            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><img src="dist/img/adminlogo.png" class="brand-image animation__shake" style="opacity: 0.8;" height="30" width="30"/></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn bg-danger" style="font-weight: bold;background-color: #007bff !important;" href="http://my.portfolio/" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i> My.Portfolio.uz </a>
                        <a class="btn bg-danger"><i class="fa fa-address-card" aria-hidden="true"></i> Настройки Super Administrator </a>
                        <a class="btn bg-danger" href="../include/logout.php"> Выход из Аккаунта <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="http://my.portfolio/adminportfolio/index.php" class="brand-link">
                    <img src="dist/img/adminlogo.png" class="brand-image" style="opacity: 0.8;" height="30" width="30"/>
                    <span class="brand-text font-weight-light"><?=$user_data['titlename']?></span>
                </a>

                <div class="sidebar">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item menu-open">
                                <a href="index.php" class="nav-link">
                                    <i class="fa fa-cogs" aria-hidden="true"></i>
                                    <p>
                                        Настройки страницы
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="index.php?homesetting=true" class="nav-link">
                                <i class="fa fa-th-large" aria-hidden="true"></i>
                                    <p>
                                        ст.Главная настройки
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="index.php?aboutsetting=true" class="nav-link">
                                    <i class="fa fa-id-badge" aria-hidden="true"></i>
                                    <p>
                                        ст.Об мне настройки
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="index.php?resumesetting=true" class="nav-link">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                    <p>
                                        ст.Резюме настройки
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="index.php?portfoliosetting=true" class="nav-link">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                    <p>
                                        Портфолио настройки
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="index.php?contactsetting=true" class="nav-link">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    <p>
                                        ст.Контакты настройки
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="index.php?backgroundsetting=true" class="nav-link">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    <p>
                                        Настройки Обой Фон
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="index.php?seosetting=true" class="nav-link">
                                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                                    <p>
                                        SEO-оптимизация
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item menu-open">
                                <a href="index.php?superadminsetting=true" class="nav-link">
                                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                                    <p>
                                        Super Administrator
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0"><i class="fa fa-diamond" style="color: #dc3545;" aria-hidden="true"></i> RubyMaine | Управление сайтом </h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard v1</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="card-primary col-lg-12">
                            <?php
                            if(isset($_GET['homesetting'])){
                                ?>
                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-th-large" aria-hidden="true"></i> ст.Главная настройки </h3>
                                    </div>

                                    <form role="form" action="../include/admin.php" method="post">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Заголовок </label>
                                                <input type="email" class="form-control" name="name_title" value="<?=$user_data['name_title']?>" id="exampleInputEmail1" placeholder="Заголовок" />
                                            </div>
                                            <div class="form-group">
                                                <i class="fa fa-indent" aria-hidden="true"></i>
                                                <label for="exampleInputPassword1"> Подзаголовок </label>
                                                <input type="text" class="form-control" name="subtitle" value="<?=$user_data['subtitle']?>" id="exampleInputPassword1" placeholder="Подзаголовок" />
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="social_icons"
                                                <?php
                                                if($user_data['social_icons']){
                                                    echo "checked";
                                                }
                                                ?>>
                                                <label class="form-check-label" for="exampleCheck1"> Показать социальные сети значки </label>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="home-update" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить настройки </button>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }else if(isset($_GET['aboutsetting'])){
                                ?>
                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-id-badge" aria-hidden="true"></i> ст.Об мне настройки </h3>
                                    </div>

                                    <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <img class="col-2" src="../images/<?=$user_data['profile_image']?>">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Выбрать файл или перетащите файл сюда...</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Заголовок Об мне </label>
                                                <input  class="form-control" name="about_title" value="<?=$user_data['about_title']?>" id="exampleInputEmail1" placeholder="Заголовок" />
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-indent" aria-hidden="true"></i>
                                                <label for="exampleInputPassword1"> Подзаголовок Об мне </label>
                                                <input  class="form-control" name="about_subtitle" value="<?=$user_data['about_subtitle']?>" id="exampleInputPassword1" placeholder="Подзаголовок" />
                                            </div>
                                            
                                            <div class="form-group">
                                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                <label for="exampleInputPassword1"> Подробного описании Об мне </label><br>
                                                <div class="form-outline mb-4">
                                                    <textarea class="form-control" id="textAreaExample6" rows="3" name="about_description"><?=$user_data['about_description']?></textarea>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="about-update" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить настройки </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-code" aria-hidden="true"></i> Мои навыки </h3>
                                    </div>

                                    <div class="card-body p-0">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px;">№</th>
                                                            <th style="width: 900px;">НАИМЕНОВАНИЕ НАВЫКОВ</th>
                                                            <th>ИЗУЧЕНИЕ ПРОЦЕСС НАВЫКОВ</th>
                                                            <th style="width: 143px;">Действие</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $q = "SELECT * from skills";
                                                            $r = mysqli_query($connection_db,$q);
                                                            $c = 1;
                                                            while($skills=mysqli_fetch_array($r)){
                                                               ?>
                                                               <tr>
                                                                    <td><?=$c?></td>
                                                                    <td><?=$skills['skill_name']?></td>
                                                                    <td>
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar progress-bar-danger" style="width: <?=$skills['skill_level']?>%"></div>
                                                                        </div>
                                                                        <span class="badge bg-danger"><?=$skills['skill_level']?>%</span>
                                                                    </td>
                                                                    <td>
                                                                    <a class="btn btn-primary" style="color: #fff;background-color: #dc3545;border-color: #dc3545;" href="../include/deleteskill.php?id=<?=$skills['id']?>"><i class="fa fa-trash" aria-hidden="true"></i> УДАЛИТЬ</a>
                                                                    </td>
                                                                </tr>
                                                               <?php
                                                               $c++;
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                    
                                    <form role="form" action="../include/admin.php" method="post">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Наименование мои навыки </label>
                                                <input type="text" class="form-control" name="skill_name" id="exampleInputEmail1">
                                            </div>
                                            
                                            <div class="form-group">
                                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Уровень мои навыки </label>
                                                <input type="range" min="1" max="100" class="form-control" name="skill_level" id="exampleInputEmail1">
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="add-skills" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить и Добавить мои навыки </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-user-circle" aria-hidden="true"></i>  Личная информация </h3>
                                    </div>

                                    <div class="card-body p-0">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px;">№</th>
                                                    <th> Наименование полья </th>
                                                    <th> Информационного полья </th>
                                                    <th style="width: 143px;">Действие</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $q = "SELECT * from personal_info";
                                                    $r = mysqli_query($connection_db,$q);
                                                    $c = 1;
                                                    while($personal_info = mysqli_fetch_array($r)){
                                                        ?>
                                                        <tr>
                                                            <td><?=$c?></td>
                                                            <td><?=$personal_info['label']?></td>
                                                            <td><?=$personal_info['value']?></td>
                                                            
                                                            <td>
                                                            <a class="btn btn-primary" style="color: #fff;background-color: #dc3545;border-color: #dc3545;" href="../include/deletepersonalinfo.php?id=<?=$personal_info['id']?>"><i class="fa fa-trash" aria-hidden="true"></i> УДАЛИТЬ</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $c++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <form role="form" action="../include/admin.php" method="post">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Наименование полья личную информацию </label>
                                                <input type="text" class="form-control" name="label" id="exampleInputEmail1">
                                            </div>
                                            
                                            <div class="form-group">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Информационного полья личную информацию </label>
                                                <input type="text" class="form-control" name="value" id="exampleInputEmail1">
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="personal-info" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить и Добавить личную информацию </button>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }else if(isset($_GET['resumesetting'])){
                                ?>
                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-address-card" aria-hidden="true"></i> ст.Резюме настройки </h3>
                                    </div>

                                    <div class="card-body p-0">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px;">№</th>
                                                    <th> Наименование категории </th>
                                                    <th> Наименование название </th>
                                                    <th> Рабочее время / Годы </th>
                                                    <th> Формирование организация </th>
                                                    <th> Наименование должности </th>
                                                    <th style="width: 143px;"> Действие </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $q = "SELECT * from resume";
                                                    $r = mysqli_query($connection_db,$q);
                                                    $c = 1;
                                                    while($personal_info = mysqli_fetch_array($r)){
                                                        ?>
                                                        <tr>
                                                            <td><?=$c?></td>
                                                            <td><?=$personal_info['title']?></td>
                                                            <td><?=$personal_info['type']?></td>
                                                            <td><?=$personal_info['time']?></td>
                                                            <td><?=$personal_info['organization']?></td>
                                                            <td><?=$personal_info['about_expertnaire']?></td>
                                                            <td>
                                                                <a class="btn btn-primary" style="color: #fff;background-color: #dc3545;border-color: #dc3545;" href="../include/deleteresume.php?id=<?=$personal_info['id']?>"><i class="fa fa-trash" aria-hidden="true"></i> УДАЛИТЬ</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $c++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <form role="form" action="../include/admin.php" method="post">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Наименование из категории </label>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option> Выберите из категории * ... </option>
                                                            <option value="a"> Университеть </option>
                                                            <option value="b"> ООО COSCOM UCell </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Наименование из название </label>
                                                <input type="text" class="form-control" name="label" id="exampleInputEmail1">
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Рабочее время / Годы </label>
                                                <input type="text" class="form-control" name="value" id="exampleInputEmail1">
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-university" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Формирование из организация </label>
                                                <input type="text" class="form-control" name="value" id="exampleInputEmail1">
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Наименование и должности </label>
                                                <input type="text" class="form-control" name="value" id="exampleInputEmail1">
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="resume-info" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить и Добавить Резюме настройки </button>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }else if(isset($_GET['portfoliosetting'])){
                                ?>
                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> ст.Портфолио настройки </h3>
                                    </div>

                                    <div class="card-body p-0">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px;">№</th>
                                                    <th> В каком языке этого проекта написано </th>
                                                    <th> Скриншоты об проекта </th>
                                                    <th> Описание о проекта </th>
                                                    <th> Ссылка на проекта </th>
                                                    <th style="width: 143px;"> Действие </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $q = "SELECT * from portfolio";
                                                    $r = mysqli_query($connection_db,$q);
                                                    $c = 1;
                                                    while($personal_info = mysqli_fetch_array($r)){
                                                        ?>
                                                        <tr>
                                                            <td><?=$c?></td>
                                                            <td><?=$personal_info['project_type']?></td>
                                                            <td><img src="../images/<?=$personal_info['project_images']?>" style="width:150px";/></td>
                                                            <td><?=$personal_info['project_name']?></td>
                                                            <td><a href="<?=$personal_info['project_link']?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i> Открыть ссылку </a></td>
                                                            <td>
                                                                <a class="btn btn-primary" style="color: #fff;background-color: #dc3545;border-color: #dc3545;" href="../include/deleteportfolio.php?id=<?=$personal_info['id']?>"><i class="fa fa-trash" aria-hidden="true"></i> УДАЛИТЬ</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $c++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <form role="form" action="../include/admin.php" method="post" enctype="multipart/from-data">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> В каком языке этого проекта написано </label>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option> Выберите из категории * ... </option>
                                                            <option value="PHP"> WEB-Development or PHP & MySQL </option>
                                                            <option value="LARAVEL"> WEB-APP or Laravel & MySQL </option>
                                                            <option value="ERP"> WEB-APP or ERP </option>
                                                            <option value="HRM"> WEB-APP or HRM system </option>
                                                            <option value="CRM"> WEB-APP or CRM system </option>
                                                            <option value="APP"> WEB-APP or Application </option>
                                                            <option value="WEB"> WEB-APP or Site </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                                <label for="exampleInputFile"> Скриншоты об проекта </label>
                                                <div class="custom-file">
                                                    <input type="file" name="project_images" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Выбрать файл или перетащите файл сюда...</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-align-center" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Описание о проекта </label>
                                                <input type="text" name="project_name" class="form-control" id="exampleInputEmail1">
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Ссылка на проекта </label>
                                                <input type="text" name="project_link" class="form-control" id="exampleInputEmail1">
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="portfolio-info" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить и Добавить Портфолио настройки </button>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }else if(isset($_GET['contactsetting'])){
                                ?>
                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-phone-square" aria-hidden="true"></i> ст.Контакты настройки </h3>
                                    </div>

                                    <form role="form" action="../include/admin.php" method="post">
                                        <div class="card-body">
                                            
                                            <div class="form-group">
                                                <i class="fa fa-map" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Название и адрес </label>
                                                <input type="text" class="form-control" name="address" value="<?=$user_data['address']?>" id="exampleInputEmail1" placeholder="Заполните адрес..." />
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Название электронной почты </label>
                                                <input type="text" class="form-control" name="mail" value="<?=$user_data['mail']?>" id="exampleInputEmail1" placeholder="Заполните E-Mail почты..." />
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                                <label for="exampleInputPassword1"> Добавить мобильного номера </label>
                                                <input type="text" class="form-control" name="mobile" value="<?=$user_data['mobile']?>" id="exampleInputPassword1" placeholder="Заполните Телефон номера..." />
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="contact-info" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить в контакты настройки </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-gg-circle" aria-hidden="true"></i> Список социальных сетей </h3>
                                    </div>

                                    <form role="form" action="../include/admin.php" method="post">
                                        <div class="card-body">
                                            
                                            <div class="form-group">
                                                <i class="fa fa-git" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Git ссылку на репозиторий  </label>
                                                <input type="text" class="form-control" name="git" value="<?=$user_data['git']?>" id="exampleInputEmail1" placeholder="Git ссылку на репозиторий ..." />
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-github" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> GitHub ссылку на репозиторий </label>
                                                <input type="text" class="form-control" name="github" value="<?=$user_data['github']?>" id="exampleInputEmail1" placeholder="GitHub ссылку на репозиторий ..." />
                                            </div>

                                            <div class="form-group">
                                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                                <label for="exampleInputPassword1"> Telegram-Channel ссылку на репозиторий </label>
                                                <input type="text" class="form-control" name="telegram_channel" value="<?=$user_data['telegram_channel']?>" id="exampleInputPassword1" placeholder="Telegram-Channel ссылку на репозиторий ..." />
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-telegram" aria-hidden="true"></i>
                                                <label for="exampleInputPassword1"> Telegram-Account ссылку на Аккаунта </label>
                                                <input type="text" class="form-control" name="telegram_accaunt" value="<?=$user_data['telegram_accaunt']?>" id="exampleInputPassword1" placeholder="Telegram-Account ссылку на Аккаунта ..." />
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="socialnetworks-info" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить в контакты настройки </button>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }else if(isset($_GET['backgroundsetting'])){
                                ?> 
                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-picture-o" aria-hidden="true"></i> Настройки Обой Фон </h3>
                                    </div>

                                    <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            
                                            <div class="form-group">
                                                <img class="col-7" src="../images/<?=$user_data['background_img']?>">
                                                <div class="custom-file">
                                                    <input type="file" name="site_background" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Выбрать файл или перетащите файл сюда...</label>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="background-info" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить в Обой фона настройки </button>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }else if(isset($_GET['seosetting'])){
                                ?>
                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-line-chart" aria-hidden="true"></i> SEO-оптимизация </h3>
                                    </div>

                                    <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            
                                            <div class="form-group">
                                                <img class="col-2" src="../images/<?=$user_data['favicon']?>">
                                                <div class="custom-file">
                                                    <input type="file" name="favicon" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Выбрать файл или перетащите файл сюда...</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Название страницы </label>
                                                <input type="text" class="form-control" name="page_title" value="<?=$user_data['page_title']?>" id="exampleInputEmail1" placeholder="Заполните название страницы ..." />
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-code" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Название ключевые слова (в разделенном виде) </label>
                                                <input type="text" class="form-control" name="keywords" value="<?=$user_data['keywords']?>" id="exampleInputEmail1" placeholder="Заполните ключевые слова (в разделенном виде) ..." />
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Название описание </label>
                                                <input type="text" class="form-control" name="description" value="<?=$user_data['description']?>" id="exampleInputEmail1" placeholder="Заполните описанием ..." />
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="seo-info" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить в SEO-оптимизация настройки </button>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }else if(isset($_GET['superadminsetting'])){
                                ?> 
                                <div class="card card-primary col-lg-12">
                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-user-secret" aria-hidden="true"></i> Настройка Super Administrator </h3>
                                    </div>

                                    <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            
                                            <div class="form-group">
                                                <img class="col-2" src="../images/<?=$user_data['admin_profile_image']?>">
                                                <div class="custom-file">
                                                    <input type="file" name="admin_profile_image" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Выбрать файл или перетащите файл сюда...</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Польного Название (ролья) </label>
                                                <input type="text" class="form-control" name="fullname" value="<?=$user_data['fullname']?>" id="exampleInputEmail1" placeholder="Заполните название страницы ..." />
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Введите действующий адрес (электронной почты) </label>
                                                <input type="text" class="form-control" name="mail" value="<?=$user_data['mail']?>" id="exampleInputEmail1" placeholder="Заполните ключевые слова (в разделенном виде) ..." />
                                            </div>

                                            <div class="form-group">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                                <label for="exampleInputEmail1"> Введите пароль </label>
                                                <input type="text" class="form-control" name="password" value="<?=$user_data['password']?>" id="exampleInputEmail1" placeholder="Заполните описанием ..." />
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" name="superadmin-info" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить в Настройка Super Administrator </button>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }else{
                            ?>
                            <form role="form" method="post" action="../include/admin.php" enctype="multipart/form-data">
                                <div class="card card-primary col-lg-12">

                                    <div class="btn btn-block bg-gradient-danger btn-lg">
                                        <h3 class="card-title"><i class="fa fa-cogs" aria-hidden="true"></i> Настройки страницы </h3>
                                    </div>
                                
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" name="home" class="custom-control-input"
                                        id="customSwitch1"
                                        <?php
                                        if($user_data['home_section']){
                                            echo "checked";
                                        }
                                        ?>>
                                        <label class="custom-control-label" for="customSwitch1"> Главная (страница включён)</label>
                                    </div>

                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" name="about" class="custom-control-input" 
                                        id="customSwitch2"
                                        <?php
                                        if($user_data['about_section']){
                                            echo "checked";
                                        }
                                        ?>>
                                        <label class="custom-control-label" for="customSwitch2"> Об мне (страница включён)</label>
                                    </div>

                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" name="resume" class="custom-control-input" 
                                        id="customSwitch3"
                                        <?php
                                        if($user_data['resume_section']){
                                            echo "checked";
                                        }
                                        ?>>
                                        <label class="custom-control-label" for="customSwitch3"> Резюме (страница включён)</label>
                                    </div>

                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" name="service" class="custom-control-input" 
                                        id="customSwitch4"
                                        <?php
                                        if($user_data['service_section']){
                                            echo "checked";
                                        }
                                        ?>>
                                        <label class="custom-control-label" for="customSwitch4"> Посты (страница включён)</label>
                                    </div>

                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" name="portfolio" class="custom-control-input" 
                                        id="customSwitch5"
                                        <?php
                                        if($user_data['portfolio_section']){
                                            echo "checked";
                                        }
                                        ?>>
                                        <label class="custom-control-label" for="customSwitch5"> Портфолио (страница включён)</label>
                                    </div>

                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" name="contact" class="custom-control-input" 
                                        id="customSwitch6"
                                        <?php
                                        if($user_data['contact_section']){
                                            echo "checked";
                                        }
                                        ?>>
                                        <label class="custom-control-label" for="customSwitch6"> Контакты (страница включён)</label>
                                    </div>
                                </div>     
                                <button type="submit" name="save-section" class="btn btn-success float-left"><i class="far fa-check-square"></i> Сохранить настройки </button>  
                            </form>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <strong>Copyright &copy; 2022 <a href="https://adminlte.io"> RubyMaine </a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block"><b>Version</b> 5.2.0</div>
            </footer>

            <aside class="control-sidebar control-sidebar-dark"></aside>
        </div>
        <script>
            $.widget.bridge("uibutton", $.ui.button);
        </script>
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="plugins/chart.js/Chart.min.js"></script>
        <script src="plugins/sparklines/sparkline.js"></script>
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="dist/js/adminlte.js?v=3.2.0"></script>
        <script src="dist/js/pages/dashboard.js"></script>
    </body>
</html>

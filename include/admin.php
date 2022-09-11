<?php
require('../include/connection_db.php');
if(isset($_POST['save-section'])){
//  print_r($_POST);
    $home = $_POST['home'] ?? 0;
    $about = $_POST['about'] ?? 0;
    $resume = $_POST['resume'] ?? 0;
    $service = $_POST['service'] ?? 0;
    $portfolio = $_POST['portfolio'] ?? 0;
    $contact = $_POST['contact'] ?? 0;

    $query = "UPDATE container_sections SET";
    $query.="home_section='$home',";
    $query.="about_section='$about',";
    $query.="resume_section='$resume',";
    $query.="service_section='$service',";
    $query.="portfolio_section='$portfolio',";
    $query.="contact_section='$contact' WHERE id=1";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php';</script>";
    }
}


//##=START  PAGE - HOME-INFO ##//

if(isset($_POST['home-update'])){
//  print_r($_POST);
    $title = mysqli_real_escape_string($connection_db,$_POST['title']);
    $subtitle = mysqli_real_escape_string($connection_db,$_POST['subtitle']);
    $social_icons = $_POST['social_icons'] ?? 0;

    $query = "UPDATE home SET";
    $query.="title='$title',";
    $query.="subtitle='$subtitle',";
    $query.="social_icons='$social_icons' WHERE id=1";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?homesetting=true';</script>";
    }
}

//##=END  PAGE - HOME-INFO ##//


//##=START  PAGE - ABOUT-INFO ##//

if(isset($_POST['about-update'])){
//  print_r($_POST);
//  var_dump($_FILES);
    $title = mysqli_real_escape_string($connection_db,$_POST['about_title']);
    $subtitle = mysqli_real_escape_string($connection_db,$_POST['about_subtitle']);
    $about_description = mysqli_real_escape_string($connection_db,$_POST['about_description']);
    $imagename = time().$_FILES['profile']['name'];
    $imgtemp = $_FILES['profile']['tmp_name'];

    if(!count($imgtemp=='')){
        $q = "SELECT * FROM about WHERE 1";
        $r = mysqli_query($connection_db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['profile_image'];
    }

    move_uploaded_file($imgtemp,"../images/$imagename");

    $query = "UPDATE about SET";
    $query.="profile_image='$imagename',";
    $query.="about_title='$about_title',";
    $query.="about_subtitle='$about_subtitle',";
    $query.="about_description='$about_description' WHERE id=1";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?aboutsetting=true';</script>";
    }
}

//##=END  PAGE - ABOUT-INFO ##//


//##=START  PAGE - ABOUT-ADD-SKILLS-INFO ##//

if(isset($_POST['add-skills'])){
//  print_r($_POST);
//  var_dump($_FILES);
    $skillname = $_POST['skillname'];
    $skilllevel = $_POST['skilllevel'];

    $query = "INSERT INTO skills (skill_name,skill_level) VALUES('$skillname','$skilllevel')";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?aboutsetting=true';</script>";
    }
}

//##=END  PAGE - ABOUT-ADD-SKILLS-INFO ##//

//##=START  PAGE - PERSONAL-INFO ##//

if(isset($_POST['personal-info'])){
//  print_r($_POST);
    $label = $_POST['label'];
    $value = $_POST['value'];

    $query = "INSERT INTO personal_info (label,value) VALUES('$label','$value')";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?aboutsetting=true';</script>";
    }
}
    
//##=END  PAGE - PERSONAL-INFO ##//

//##=START  PAGE - RESUME-INFO ##//

if(isset($_POST['resume-info'])){
//  print_r($_POST);
    $title = $_POST['title'];
    $type = $_POST['type'];
    $time = $_POST['time'];
    $organization = $_POST['organization'];
    $about_expertnaire = $_POST['about_expertnaire'];

    $query = "INSERT INTO resume (title,type,time,organization,about_expertnaire) VALUES('$title','$type','$time','$organization','$about_expertnaire')";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?aboutsetting=true';</script>";
    }
}

//##=END  PAGE - RESUME-INFO ##//

//##=START  PAGE - PORTFOLIO-INFO ##//

if(isset($_POST['portfolio-info'])){
//  print_r($_POST);
//  var_dump($_FILES);
    $project_type = $_POST['project_type'];
    $project_images = time().$_FILES['project_images']['name'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];

    move_uploaded_file($_FILES['project_images']['tmp_name'],"../images/$project_images");

    $query = "INSERT INTO portfolio (project_type,project_images,project_name,project_link) VALUES('$project_type','$project_images','$project_name','$project_link')";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?portfoliosetting=true';</script>";
    }
}

//##=END  PAGE - PORTFOLIO-INFO ##//

//##=START  PAGE - HOME-INFO ##//

if(isset($_POST['contact-info'])){
//  print_r($_POST);
    $address = mysqli_real_escape_string($connection_db,$_POST['address']);
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];

    $query = "UPDATE contact SET";
    $query.="address='$address',";
    $query.="mail='$mail',";
    $query.="mobile='$mobile' WHERE id=1";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?contactsetting=true';</script>";
    }
}
    
if(isset($_POST['socialnetworks-info'])){
//  print_r($_POST);
    $git = $_POST['git'];
    $github = $_POST['github'];
    $telegram_channel = $_POST['telegram_channel'];
    $telegram_accaunt = $_POST['telegram_accaunt'];

    $query = "UPDATE social_networks SET";
    $query.="git='$git',";
    $query.="github='$github',";
    $query.="telegram_channel='$telegram_channel',";
    $query.="telegram_accaunt='$telegram_accaunt' WHERE id=1";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?contactsetting=true';</script>";
    }
}

//##=END  PAGE - HOME-INFO ##//

//##=START  PAGE - BACKGROUND-INFO ##//

if(isset($_POST['background-info'])){
//  print_r($_POST);
    $imagename = time().$_FILES['site_background']['name'];
    $imgtemp = $_FILES['site_background']['tmp_name'];

    move_uploaded_file($imgtemp,"../images/$imagename");

    $query = "UPDATE site_background SET";
    $query.="background_img='$background_img', WHERE id=1";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?backgroundsetting=true';</script>";
    }
}
    
//##=END  PAGE - BACKGROUND-INFO ##//

//##=START  PAGE - SEO-INFO ##//

if(isset($_POST['seo-info'])){
//  print_r($_POST);
//  print_r($_FILES);
    $page_title = mysqli_real_escape_string($connection_db,$_POST['page_title']);
    $keywords = mysqli_real_escape_string($connection_db,$_POST['keywords']);
    $description = mysqli_real_escape_string($connection_db,$_POST['description']);
    $imagename = time().$_FILES['favicon']['name'];
    $imgtemp = $_FILES['favicon']['tmp_name'];

    if(!count($imgtemp=='')){
        $q = "SELECT * FROM seo_optimization WHERE 1";
        $r = mysqli_query($connection_db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['favicon'];
    }

    move_uploaded_file($imgtemp,"../images/$imagename");

    $query = "UPDATE seo_optimization SET";
    $query.="page_title='$page_title',";
    $query.="keywords='$keywords',";
    $query.="description='$description',";
    $query.="favicon='$imagename' WHERE id=1";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php?seosetting=true';</script>";
    }
}

//##=END  PAGE - SEO-INFO ##//

//##=START  PAGE - SUPERADMIN-INFO ##//

if(isset($_POST['superadmin-info'])){
//  print_r($_POST);
//  print_r($_FILES);
    $fullname = mysqli_real_escape_string($connection_db,$_POST['fullname']);
    $mail = mysqli_real_escape_string($connection_db,$_POST['mail']);
    $password = mysqli_real_escape_string($connection_db,$_POST['password']);
    $imagename = time().$_FILES['admin_profile_image']['name'];
    $imgtemp = $_FILES['admin_profile_image']['tmp_name'];

    if(!count($imgtemp=='')){
        $q = "SELECT * FROM superadmin WHERE 1";
        $r = mysqli_query($connection_db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['admin_profile_image'];
    }

    move_uploaded_file($imgtemp,"../images/$imagename");

    $query = "UPDATE superadmin SET";
    $query.="fullname='$fullname',";
    $query.="mail='$mail',";
    $query.="password='$password',";
    $query.="admin_profile_image='$imagename' WHERE id=1";
    
    $run = mysqli_query($connection_db,$query);
    if($run){
        echo "<script>window.location.href='../adminportfolio/index.php';</script>";
    }
}

//##=END  PAGE - SUPERADMIN-INFO ##//
?>
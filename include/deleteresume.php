<?php
    require('connection_db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM resume WHERE id=$id";
        $run = mysqli_query($connection_db,$query);
        if($run){
            echo "<script>window.location.href='../adminportfolio/index.php?resumesetting=true';</script>";
        }
    }
?>
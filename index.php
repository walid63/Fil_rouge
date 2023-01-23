<?php
include "./vue/inc/head.php";
include "./controllers/accueil_controller.php"; 



if (isset($_GET['uc'])) {
    //echo $_get['uc']; 
   
    include "./controllers/".$_GET['uc']."_controller.php";
}




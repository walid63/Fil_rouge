<?php 


if (isset($_SESSION['user_id'])) {
   
    header('location: index.php?uc=home');

}else
{
    include './vue/Users/login.php';
    if(isset($_POST['submit']))
    {
        $login = $_POST['username'];
        $pass = $_POST['pass'];

        $bdd= new Connect_db();
        $bdd->login($login, $pass);
     
    }
}
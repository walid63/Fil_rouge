<?php
include './vue/admin/insert_article.php';
if (isset($_POST['submit'])) {
    $articleName = $_POST['nom'];
    $description = $_POST['description'];
    $price = $_POST['prix'];
    //$imageArticle1 = $_POST['img1'];
    insertArticle($articleName, $description, $price);
    $a = new ArticleModel($articleName, $description, $price,);
    $a->create();
}


function insertArticle($articleName, $description, $price, )
{

    
}



function selectAllArticle()
{
    //$a = new connect_db();

}

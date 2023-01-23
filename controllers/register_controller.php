<?php




/*if(isset($_REQUEST['login']) && isset($_REQUEST['pass'])){
	echo "string";
	include './modele/database/connect_db.php';
	$bdd= new Connect_db();
	$res = $bdd->login($_REQUEST['login'] ,$_REQUEST['pass']);
	var_dump($res);	
	$_SESSION['userid']=$res['id'];
	if($res!= null){
		header('location: index.php?uc=accueil');
	}


}else{*/
	
	include './vue/Users/register.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$adresse = $_POST['adresse'];
		$code_postal = $_POST['codePostal'];
		$pays = $_POST['pays'];
		$ville = $_POST['ville'];
		$bdd = new connect_db;
		if(!isset($_POST['username']))
		{
			echo "error";
		}else if(!isset($_POST['email']))
		{

		}else if(!isset($_POST['pass']))
		{

		}else if(!isset($_POST['nom']))
		{

		}else if(!isset($_POST['prenom']))
		{

		}else if(!isset($_POST['adresse']))
		{

		}else if(!isset($_POST['codePostal']))
		{

		}else if(!isset($_POST['pays']))
		{

		}else if(!isset($_POST['ville']))
		{

		}else if(isset($_POST['username']) 
		&& isset($_POST['email']) 
		&& isset($_POST['pass']) 
		&& isset($_POST['nom']) 
		&& isset($_POST['prenom']) 
		&& isset($_POST['adresse'])
		&& isset($_POST['codePostal']) 
		&& isset($_POST['pays']) 
		&& isset($_POST['ville']))
		{
			$bdd->register($nom, $prenom, $username, $password, $adresse, $code_postal, $ville, $pays, $email);
		}
		
	}
//}

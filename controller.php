<?php 
	//verification
	
	if($_SERVER["REQUEST_METHOD"]== "POST"){
	
	//declaration des variables
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["mail"];
	$tel = $_POST["tel"];
	
	//definition du processus de conection à la base de donnée
	define('HOST','localhost');
 	define('USER','root');
 	define('PASS','');
 	define('DB','membersdata');
	
	//Itération
	if (!isset($nom)){
	die("S'il vous plait entrez votre Nom");
	}

	if (!isset($prenom)){
	die("S'il vous plait entrez votre Prenom");
	}

	if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
	die("S'il vous plait entrez votre addresse Email");
	}
	
	if (!isset($tel)){
		die("S'il vous plait entrez votre Numéro de Téléphone");
	}

	
	//ouverture d'une nouvelle session
	$mysqli = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	
	//afficher les erreurs
	if($mysqli->connect_error) {
	die("Connection Failed :".$mysqli->connect_error);
	}

	// teste de connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
	//verification des numéros dans la base de donnée
	if ($result1 = mysqli_query($mysqli, "SELECT nom, prenom, email, tel FROM members WHERE username='$tel'  ; ")) {
		$rest1 = mysqli_num_rows($result1);

		if ($rest1) {
			header('Location:enre1.html');
			exit();
		}
	}
	
	
	//prépatation de la requête
	$statement ="INSERT INTO members(nom,prenom,email,tel) VALUES('$nom','$prenom','$email','$tel')";
	
	//association

	if(mysqli_query($mysqli,$statement)){
	// echo "<b>!Vous avez été bien enregistré</b> ";
	//sleep(5);
	header('Location:enre.html');
	}else{
	echo $mysqli->error;
	}
	}
      //fin
	  
	//authentification
	
?>

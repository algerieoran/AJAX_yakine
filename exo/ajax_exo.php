<?php

require 'connexion.php';

extract($_POST);
echo $employe;

// $_POST = array(
	// 'employe' => 'yakine'
// );
// extract()  fait $employe = 'yakine'

$tab['validation'] ='';
$resultat = $pdo -> prepare("INSERT INTO employes (prenom, nom, sex, service, salaire) VALUES (:prenom, :nom, :sex, :service, :salaire)");
$resultat -> bindParam(
						array(':prenom, :nom, :sex, :service, :salaire'),
						 $employe,
						PDO::PARAM_STR);

if($resultat -> execute()){
	$tab['validation'] = 'OK';
}
else{
	$tab['validation'] = 'erreur';
}

echo json_encode($tab);
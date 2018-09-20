<?php

require 'connexion_exo.php';

//echo json_encode($_POST);  // pour vérifier que tout va bien 

extract($_POST);

// // extract()  fait $employe = 'setti'



$resultat = $pdo -> prepare("INSERT INTO employes (prenom, nom, sexe, service, salaire) VALUES (:prenom, :nom, :sexe, :service, :salaire)");

$resultat->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$resultat->bindParam(':nom', $nom, PDO::PARAM_STR);
$resultat->bindParam(':sexe', $sexe, PDO::PARAM_STR);
$resultat->bindParam(':service', $service, PDO::PARAM_STR);
$resultat->bindParam(':salaire', $salaire, PDO::PARAM_STR);


if ($resultat -> execute()) {
    $data ['validation'] = 'OK';
}
else {
    $data ['validation'] = 'Erreur';
}

echo json_encode($data);

// $resultat = $pdo -> query("SELECT * FROM employes");
// $tab['resultat'] = '';
// while($employes = $resultat -> fetch(PDO::FETCH_ASSOC)) {
//    $tab['resultat'] .= '<tr>';
// //    $tab['resultat'] .= '<td>' . $employes['id_employes'] . '</td>';
//    $tab['resultat'] .= '<td>' . $employes['prenom'] . '</td>';
//    $tab['resultat'] .= '<td>' . $employes['nom'] . '</td>';
//    $tab['resultat'] .= '<td>' . $employes['sexe'] . '</td>';
//    $tab['resultat'] .= '<td>' . $employes['service'] . '</td>';
//    $tab['resultat'] .= '<td>' . $employes['salaire'] . '</td>';
//    $tab['resultat'] .= '</tr>';

// }

// echo json_encode($tab);
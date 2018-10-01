<?php

require 'connexion.php';

//extract($_POST);



// $resultat = $pdo -> prepare("INSERT INTO produit (titre) VALUES (:titre)");
// $resultat -> bindParam (':titre', $produit, PDO::PARAM_STR);

// if($resultat -> execute()) {

//     $tab['validation'] = 'OK';

// } else {

//     $tab['validation'] = 'Erreur !';
   
// }



//---------------------
$resultat = $pdo -> query("SELECT * FROM produit");

$tab['resultat'] =''; 
while($produit = $resultat -> fetch (PDO::FETCH_ASSOC))

{

    $tab['resultat'] .= '<tr>';
    $tab['resultat'] .= '<td>' . $produit['id_produit'] . '</td>';
    $tab['resultat'] .= '<td>' . $produit['category'] . '</td>';
    $tab['resultat'] .= '<td>' . $produit['titre'] . '</td>';
    $tab['resultat'] .= '<td>' . $produit['description'] . '</td>';
    $tab['resultat'] .= '<td>' . $produit['couleur'] . '</td>';
    $tab['resultat'] .= '<td>' . $produit['taille'] . '</td>';
    $tab['resultat'] .= '<td>' . $produit['public'] . '</td>';
    $tab['resultat'] .= '<td>' . $produit['prix'] . '</td>';
    $tab['resultat'] .= '<td>' . $produit['stock'] . '</td>';
    $tab['resultat'] .= '<tr>';

} 

echo json_encode($tab);


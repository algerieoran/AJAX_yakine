<?php

require 'Etudiant.class.php';

$setti = new Etudiant;
$setti -> setPrenom('Setti');
$setti -> setNom('Belkacem');
$setti -> setEmail('setti.belkacem@gmail.com');
$setti -> setTelephone('0765228941');


$ines = new Etudiant;
$ines -> setPrenom('Ines');
$ines -> setNom('Ouldkadi');
$ines -> setEmail('ines.ouldkadi@gmail.com');
$ines -> setTelephone('0765223368');


$sarah = new Etudiant;
$sarah -> setPrenom('Sarah');
$sarah -> setNom('Ouldkadi');
$sarah -> setEmail('sarah.ouldkadi@gmail.com');
$sarah -> setTelephone('0689542289');



//-----------------

echo '<h1> Les etudiant élues sont:</h1>';

    $infoSetti = $setti -> getInfos();
    echo '<h3>' . $infoSetti['prenom'] . '</h3>';
    echo '<ul>';

    foreach($infoSetti as $indice => $valeur){
        echo '<li>' . $indice . ' : ' . $valeur . '</li>';
    }
    echo '</ul><hr/>';



    $infoInes = $ines -> getInfos();
    echo '<h3>' . $infoInes['prenom'] . '</h3>';
    echo '<ul>';

    foreach($infoInes as $indice => $valeur){
        echo '<li>' . $indice . ' : ' . $valeur . '</li>';
    }
    echo '</ul><hr/>';



    $infoSarah = $sarah -> getInfos();
    echo '<h3>' . $infoSarah['prenom'] . '</h3>';
    echo '<ul>';
    foreach($infoSarah as $indice => $valeur){
        echo '<li>' . $indice . ' : ' . $valeur . '</li>';
    }
    echo '</ul><hr/>';
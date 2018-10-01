// Fonction permettant de lancer les traitements à l'évènement "click".
$(document).ready(function() {

    $("#submit").click (function (event) {

        event.preventDefault();  // On annule le comportement initial du submit
        affichageProduit();

    });




    function affichageProduit() {

    

        // $.post("ajax.php", '', function(data) {
        //     // data contient ce que le PHP nous retourne a savoir (ca sera) un objet Json, ou à l'indice "validation" il y aura 'OK' ou 'Erreue'
        //     if(data.validation == 'OK') {
        //         $('#resultat').append('<p style="background:green; color: white; padding: 5px">L\'employé a été enregistré</p>');
            
        //     }

        // }, 'json');


    

        $.ajax({
            url: "ajax.php", 
            dataType: "json",
            success: function (data) {

                console.log(data.resultat);
                $("#resultat").html(data);
            }
        });
        

    }

       

});
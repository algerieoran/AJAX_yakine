// Fonction permettant de lancer les traitements à l'évènement "click". 
$(document).ready(function(){
	$("#submit").click(function(event){
		event.preventDefault(); // Annule le comportement initial du submit
		insertEmploye();
	});
	
	function insertEmploye(){
		var prenom = $('#prenom').val();
		var nom = $('#nom').val();
		var sexe = $('.sexe').val();
		var service = $('#service').val();
		var salaire = $('#salaire').val();
		
		// var parameters = 'prenom=' + prenom + ';nom=' + nom;

		parameters = {
			'prenom': $('#prenom').val(),
			'nom' : $('#nom').val(),
			'sexe' : $('.sexe').val(),
			'service' : $('#service').val(),
			'salaire' : $('#salaire').val()
		};
		 //console.log(parameters);
		$.post("ajax.php", parameters, function(data){

			console.log(data);
			
			//data contient ce que le PHP nous retourne a savoir un objet Json, ou à l'indice "validation" il y aura 'ok' ou 'Erreur'
			// if(data.validation == 'OK'){
				
			// 	// $('#resultat').html('<p style="background:green; color: white; padding: 5px">L\'employé a été enregistré</p>');
			// 	$('#prenom').val(""); // On vide le champs prenom
			// 	$('#nom').val(""); // On vide le champs nom
			// 	$('.sexe').val(""); // On vide le champs sexe
			// 	$('#service').val(""); // On vide le champs service
			// 	$('#salaire').val(""); // On vide le champs salaire
			// }
		}, 'json');
	}
});


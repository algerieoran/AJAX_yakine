// Fonction permettant de lancer les traitements à l'évènement "click". 
$(document).ready(function(){
	$("#submit").click(function(event){
		event.preventDefault(); // Annule le comportement initial du submit
		insertEmploye();
	});
	
	function insertEmploye(){
		var prenom = $('#prenom').val();
		var nom = $('#nom').val();
		var service = $('#service').val();
		var salaire = $('#salaire').val();
		
		var parameters = 'employe=' + prenom;
		
		$.post("ajax.php", parameters, function(data){
			
			//data contient ce que le PHP nous retourne a savoir un objet Json, ou à l'indice "validation" il y aura 'ok' ou 'Erreur'
			if(data.validation == 'OK'){
				$('#resultat').append('<p style="background:green; color: white; padding: 5px">L\'employé a été enregistré</p>');
				$('#prenom').val(""); // On vide le champs prenom
			}
		}, 'json');
	}
});


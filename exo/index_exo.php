<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="ajax_exo.js"></script>
	</head>
	<body>
	
		<form method="post" action="">
			<div>
				<label for="prenom">Prenom </label><br>
				<input type="text" name="prenom" id="prenom" />
			</div>
			
			<div>
				<label for="nom">Nom </label><br>
				<input type="text" name="nom" id="nom" />
			</div>

			<div>
				<label>Sexe </label><br>
				<input type="radio" class="sexe" name="sexe" value="m" checked>Homme
				<input type="radio" class="sexe" name="sexe" value="f" checked>femme
			</div>

			<div>
				<label for="service">Service </label><br>
				<input type="text" name="service" id="service" />
			</div>

			<div>
				<label for="salaire">Salaire </label><br>
				<input type="text" name="salaire" id="salaire" />
			</div>
				
			<div><br>
				<input type="submit" value="OK" id="submit"/>
			</div>
		</form>
		
		<div id="resultat"></div>
		
	</body>
</html>



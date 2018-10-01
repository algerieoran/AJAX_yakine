
-- Exercice 2 (3pt) : SQL (BDD Bibliotheque) (30 min)
	-- Dans un fichier ecrire une requete (jointure) permettant d'afficher toutes personnes ayant emprunté le livre une vie de Guy de Maupassant: 
		-- - prenom - auteur - titre du livre - date d'emprunt - date de rendu
		
		
		

	
		
-- Jointure INTERNE (avec JOIN)				
SELECT a.prenom, l.livre, l.titre, e.date_sortie, e.date_rendu
FROM articles ar
INNER JOIN users us ON ar.id_user = us.id
WHERE ar.id = '10'







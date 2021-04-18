<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>catalogue</title>
    </head>
    <body>
        <a href="ajouterVehicule.php">Ajouter un véhicule</a>
        <h1>Faire une recherche</h1>
        
        <h2>Par nom du véhicule :</h2>
        <p>nom du véhicule : <input type="text" name="name" placeholder="nom du véhicule" /></p>
        <input type="submit" value="Envoyer" />
        
        <h2>Par nom catégorie du véhicule :</h2>
        <p>catégorie du véhicule : <input type="text" name="categorie" placeholder="categorie" /></p>
        <input type="submit" value="Envoyer" />
        
        <h1>Catalogue des véhicules</h1>
        <?php 
        
$name = $_POST['name'];
$categorie = $_POST['categorie'];

$bdd = new PDO('mysql:host=localhost;dbname=rsDev;charset=utf8', 'loick', 'Loick2001');
$req = $bdd->query("SELECT nom, nom_spawn, categorie FROM vehicules WHERE nom LIKE '$name%'");
$req2 = $bdd->query("SELECT nom, nom_spawn, categorie FROM vehicules WHERE categorie LIKE '$categorie%'");

echo "<br>";
echo '
	<table>
		<thead>
       	<tr>
           	<th>Nom</th>
           	<th>Nom de spawn</th>
           	<th>Catégorie</th>
       	</tr>
   		</thead>
   		<tbody>';

       
	if ($name != ""){
	while ($ligne = $req -> fetch()) {
        echo '<tr><th>' . $ligne['nom'] . '</th><th>' . $ligne['nom_spawn'] . '</th><th> ' . $ligne['categorie'] . '</th></tr> ';}}
 
        if ($categorie != ""){
	while ($ligne2 = $req2 -> fetch()) {
        echo '<tr><th>' . $ligne2['nom'] . '</th><th>' . $ligne2['nom_spawn'] . '</th><th> ' . $ligne2['categorie'] . '</th></tr> ';}}
    echo '</table></tbody>';
        ?>
        
    </body>
</html>

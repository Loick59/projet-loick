<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ajouter un véhicule</title>
    </head>
    <body>
        <a href="catalogueVehicule.php">Revenir au catalogue</a> 
        <form method="POST">
            <h1>ajouter un véhicule au catalogue</h1>
            <p>nom du véhicule : <input type="text" name="name" placeholder="nom du véhicule" /></p>
            <p>nom de spawn du véhicule : <input type="text" name="spawn" placeholder="nom de spawn" /></p>
            <p>catégorie du véhicule : <label for="categorie"></label>
<select name="categorie">
        <option>Choisir une catégorie</option>
    <optgroup label="-- voiture --">
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </optgroup>
    <optgroup label="-- moto --">
        <option>4</option>
        <option>5</option>
        <option>6</option>
    </optgroup>
     <optgroup label="-- camion --">
        <option>7</option>
        <option>8</option>
        <option>9</option>
    </optgroup>
     <optgroup label="-- autre --">
        <option>10</option>
        <option>11</option>
        <option>12</option>
    </optgroup>
     <optgroup label="-- entreprise --">
        <option>13</option>
        <option>14</option>
        <option>15</option>
    </optgroup>
</select></p>
 <input type="submit" value="Envoyer" />
        </form>
        
        <?php

$name = $_POST['name'];
$spawn = $_POST['spawn'];
$categorie = $_POST['categorie'];


try{
$bdd = new PDO('mysql:host=localhost;dbname=rsDev;charset=utf8', 'loick', 'Loick2001', [ 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,] );

$req = $bdd->prepare('INSERT INTO vehicules (nom, nom_spawn, categorie) VALUES(:name, :spawn, :categorie)');
        $req->bindParam(':name',$name);
        $req->bindParam(':spawn',$spawn);
        $req->bindParam(':categorie',$categorie);
        $req->execute();
echo '<br>';
echo "Véhicule ajouté";
}
catch(Exception $e){
  echo '<br><br>';
    echo 'Impossible de traiter les données !! ';
    echo '<br>';
    echo 'Veuillez recommencer le formulaire';
    echo "<br>";
    }

?>
        
        
    </body>
</html>

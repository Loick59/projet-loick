<!doctype html>
<html>
    <head>
        <?php include'head2.php'; ?>
        <title>RealStory</title>
    </head>
    <header><?php include("header.php"); ?></header>
    <body>
        <h1>Recrutement communauté Real Story</h1>
        <p class="brief">Nous attendons des réponses <b>développées</b> !<br>
            Afin de nous faire parvenir votre candidature, merci de remplir avec <b>attention</b> le formulaire ci-après. Une réponse vous sera envoyée dans les plus brefs délais <i>(cela peut prendre quelques jours !)</i>.
        </p>
        <form method="POST">
   <p>Pseudo Discord avec # <i>(Ex : James#1234)</i> <br><input type="text" name="discord" placeholder="Nous attendons des réponses développées !" /></p>
   <p>Adresse Email <i>(Vous recevrez la réponse dessus)</i> <br><input type="text" name="mail" placeholder="Nous attendons des réponses développées !" /></p>
   <p>Présentez vous en quelques lignes <i>(prénom, âge, hobbies, ...)</i> <br><textarea name="presentation" placeholder="Nous attendons des réponses développées !"></textarea></p>
   <p>Comment nous avez vous connu ? <br><textarea name="connaissance" placeholder="Nous attendons des réponses développées !"></textarea></p>
   <p>Selon vous, qu'est-ce que Real Story ? <br><textarea name="cestkoiRS" placeholder="Nous attendons des réponses développées !"></textarea></p>
   <p>Quelles sont vos expériences communautaires et vos expériences de jeu ? <br><textarea name="experience" placeholder="Nous attendons des réponses développées !"></textarea></p>
   <p>Pourquoi nous rejoindre ? <br><textarea name="pourquoiNous" placeholder="Nous attendons des réponses développées !"></textarea></p>
   <p>Que pouvez vous nous apporter ? <br><textarea name="apporter" placeholder="Nous attendons des réponses développées !"></textarea></p>
            <input type="submit" value="Transmettre la candidature"/>
        </form>
      
        <p>Ne jamais communiquer de mots de passe dans un formulaire</p>
        <?php
        
$discord = $_POST['discord'];
$mail = $_POST['mail'];
$presentation = $_POST['presentation'];
$connaissance = $_POST['connaissance'];
$cestkoiRS = $_POST['cestkoiRS'];
$experience = $_POST['experience'];
$pourquoiNous = $_POST['pourquoiNous'];
$apporter = $_POST['apporter'];

include 'database.php';

var_dump($discord);
var_dump($mail);
var_dump($presentation);
var_dump($connaissance);
var_dump($cestkoiRS);
var_dump($experience);
var_dump($pourquoiNous);
var_dump($apporter);

try{
$req = $bdd->prepare('INSERT INTO candidatures (discord, mail, presentation, connaissance, cestkoiRS, experience, pourquoiNous, apporter) '
        . 'VALUES(:discord, :mail, :presentation, :connaissance, :cestkoiRS, :experience, :pourquoiNous, :apporter)');

        $req->bindParam(':discord',$discord);
        $req->bindParam(':mail',$mail);
        $req->bindParam(':presentation',$presentation);
        $req->bindParam(':connaissance',$connaissance);
        $req->bindParam(':cestkoiRS',$cestkoiRS);
        $req->bindParam(':experience',$experience);
        $req->bindParam(':pourquoiNous',$pourquoiNous);
        $req->bindParam(':apporter',$apporter);
        $req->execute();
        
echo '<p>Candidature envoyée !</p>';
}
catch(Exception $e){
    echo '<p>Erreur!</p> ';
    echo '<p>Veuillez recommencer votre candidature</p>';
    }

?>
    </body>
    <br>
    <footer><?php include("footer.php"); ?></footer>
</html>


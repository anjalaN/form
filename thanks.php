<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>


</head>
<style>
	p.double {border-style: double;}
	p{text-align: center;}
	body{background-color: lightblue;}
</style>
<body>

<p>Formulaire de remply pour inscription 2023</p>

<?php    

$myNom = $_POST['user_name'];
$myPrenom = $_POST['user_prenom'];
$myTelephone = $_POST['user_telephone'];
$myEmail = $_POST['user_email'];
$myMessage = $_POST['user_message'];
$mySubject = $_POST['user_subject'];
//$myChose = $_POST['have-select'];


//echo $myNom;

//echo $myTelephone;
//echo $myChose;


?>
<p class="double">
Merci <?php echo $myNom; ?> <?php echo $myPrenom; ?>de nous avoir contacté à propos de <?php echo $mySubject; ?> .

Un de nos conseillers vous contactera soit à l’adresse <?php echo $myEmail; ?>ou par téléphone au <?php echo $myTelephone; ?>dans les plus brefs délais pour traiter votre demande : 

<?php echo $myMessage; ?>

<br>
<br>
<?php
echo "My name is: " .$_POST['user_name'] . '<br>';
echo "My last name is: " .$_POST['user_prenom'] . '<br>';
echo "My telephone is: " .$_POST['user_telephone'] . '<br>';
echo "My email is: " .$_POST['user_email'] . '<br>';
echo "My subject is: " .$_POST['user_subject'] . '<br>';
echo "My message is: " .$_POST['user_message'] . '<br>';

?>

</p>

</body>
</html>
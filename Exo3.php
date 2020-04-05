<?php
session_start();
include "fonction_projet.php";

//Affichage champ de saisie

echo "<form method='post'> 
<input type='text' name='nbre_champ'>
<br>
<input type='submit' name='send' value='Valider'>
<input type='reset'  value='Annuler'>
";

//Test si on a validé et est ce que le nombre existe

if (isset($_POST["send"]) && !empty($_POST["send"]))
{
	if (isset($_POST["nbre_champ"]) && !empty($_POST["nbre_champ"]))
{
	//Test si le nbre est numerique et positif
	if (is_car_numeric($_POST["nbre_champ"]) && $_POST["nbre_champ"]>0)
	{
	$_SESSION["nb_champ"]=$_POST["nbre_champ"];
	//Génération des champs à saisir

	for ($i=1;$i<=$_POST["nbre_champ"];$i++)
	{
		$name_champ="champ"."".(string)$i;
		echo "<br><label for='".$name_champ."'>Mot N°".$i."</label><br>";
		
		echo "<input type='text' name='".$name_champ."'><br><br>";
	}
echo "<input type='submit' name='valider' value='Valider'>";
echo "</form>";
}}}
?>
<?php
// Appel aux fcts pour le traitement
if (isset ($_POST["valider"]))
{
	
	var_dump($_POST);
	$_POST["nb_champ"]=$_SESSION["nb_champ"];
	$_SESSION=$_POST;
	echo "ok";
	var_dump($_SESSION);

	
	$c=0;
	for ($i=1;$i<=$_SESSION["nb_champ"];$i++)
	{
		$name_champ="champ"."".(string)$i;
		echo "<label for='".$name_champ."'>Mot N°".$i.":</label><br>";
		if (is_chaine_alpha($_SESSION[$name_champ])=="true")
		{
			if (long_chaine($_SESSION[$name_champ])<=20)
				$c++;

			else
			{

				echo "La longueur maximale est 20";
			}
		}
				else
					echo "La chaine doit etre numérique";
		
		echo "<input type='text' value='".$_SESSION[$name_champ]."'><br><br>";

	}
		//if 	($c==$nb_champ)
echo"<br>
<input type='submit' name='send' value='Valider'>
</form>";
}
?>

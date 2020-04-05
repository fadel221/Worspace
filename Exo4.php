<?php


include("fonction_projet.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:skyblue;">
	<form method="post" action="">
<h1>Saisissez un texte </h1>
<textarea name="text" cols="50" rows="10" value="kjnj">
	
</textarea>
<br>
<input type="submit" name="sub1" value="Valider">
</form>
</body>
</html>
<?php





if (isset($_POST["sub1"]))
{
		$k=0;
			if (isset($_POST["text"])&& is_empty($_POST["text"])=="false")
			{
				echo "<h1>Le texte saisit avant correction: </h1>";
				$tab_phrase=decoupe_par_phrase($_POST["text"]);
				echo "<h3>";
				foreach($tab_phrase as $phrase)
					echo $phrase;
				echo "</h3>";
				$tab_phrase=corrige_point($tab_phrase);
				$tab_phrase=delete_esp_inutile($tab_phrase);
				$tab_phrase=corrige_virgule($tab_phrase);
				$tab_phrase=corrige_apostrophe($tab_phrase);

				echo "<br><h1>Le texte saisit aprés correction: </h1><br>";
				echo "<h3>";
				foreach($tab_phrase as $phrase)
					echo $phrase;
			}
			echo "</h3>";
}

?>

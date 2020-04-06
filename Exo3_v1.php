


<!DOCTYPE html>
<html>
<head>
	<title>Exercice 3</title>
</head>
<body>
	<form method="post" action="">
<h1>Saisissez les chaines </h1>
<input type="text" name="chaine" placeholder="une chaine de 20 caractéres">
<input type="submit" name="sub1" value="Valider">
</form>
</body>
</html>
<?php
include "fonction_projet.php";


if (isset($_POST["sub1"]))
{
		$k=0;
			if (isset($_POST["chaine"]))
			{
 				$tab_final=array();// Qui va recueillir toutes les chaines que j'ai saisit
 				$chaine=$_POST["chaine"];
				$grand_tab=decoupe($chaine);//Grand tableau qui va contenir toutes les chaines que j'ai recueillis avec post
				for ($i=0;$i<long_tab($grand_tab);$i++)
				{
		  
						if ((long_chaine($grand_tab[$i]))<=20) //Teste si ce mot a au max 20 caractéres
							{
								$tab_final[$k]=$grand_tab[$i]; //Si c'est vérifier il va le mettre dans le $tab_final 
								echo $tab_final[$k]."<br>";	//Puis l'affiche
								$k++;
							}
							else
								echo $grand_tab[$i]." dépasse 20 caractéres";
					}
					$c=0;	
					
						foreach ($grand_tab as $i)

							{
						
							if (trouve_mM($i)==1)
							{
								$c++;
							}

						}
							echo "<br>Le nombre de chaines contenant 'M' ou 'm' est égale à ".$c;
				}
			}
					
					else
						echo " Veuillez saisir que des chaines ";		

				
			
				
?>

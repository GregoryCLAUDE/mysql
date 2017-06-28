<?php
try {
  $bdd = new PDO("mysql:host=localhost; dbname=colyseum; charset=utf8", "root", "GCEJcl185la");
} catch (Exception $e) {
  die("Erreur : ".$e -> getMessage());
}


// $reponse = $bdd->query("SELECT * FROM clients");
// while($donnees=$reponse->fetch()){
//   echo '<p>Nom user= ' . $donnees['lastName'] . ' - First name= ' . $donnees['firstName'];
// }
//pour afficher les types de spectacles
// $reponse = $bdd->query("SELECT * FROM showTypes");
// while($donnees=$reponse->fetch()){
//   echo "<p> type de spectacle = " .$donnees["type"];
// }
//pour afficher les 20 premiers class_implements
// $reponse = $bdd->query("SELECT * FROM clients LIMIT 20");
// while($donnees=$reponse->fetch()){
//   echo "<p> Nom user = ".$donnees["lastName"];
// }
//pour afficher les clients avec une carte de fidélité
// $reponse = $bdd->query("SELECT * FROM clients WHERE card=1");
// while ($donnees=$reponse->fetch()){
//   echo "<p> Nom user = ".$donnees["lastName"];
// }
//pour afficher les nom est prenoms de ceux qui ont un nom qui commence par un m

//classer par ordre alphabetique des noms
// $reponse = $bdd->query("SELECT * FROM clients ORDER BY lastName");
// while ($donnees=$reponse->fetch()){
//   echo "<p> Nom : ".$donnees["lastName"]." Prenom : ".$donnees["firstName"];
// }
//affiche tous les spectacles,l'artiste, date, heure
$reponse = $bdd->query("SELECT * FROM shows ORDER BY title");
while ($donnees=$reponse->fetch()){
  echo "<p>".$donnees["title"]." par ".$donnees["performer"].", le ".$donnees['date']." à ".$donnees["startTime"];
}
 ?>

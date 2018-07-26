##Exercice 2 Sur la page index, faire un liens vers une autre page. 
Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. 
Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.



<?php
session_start();
$_SESSION['prenom'] = 'Léonardo';
$_SESSION['nom'] = 'DiCaprio';
$_SESSION['age'] = 40;
?>


    

<a href="index.php">lien</a>

 
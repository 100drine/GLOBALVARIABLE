##Exercice 2 Sur la page index, faire un liens vers une autre page. 
Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. 
Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.</br>


<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="exercice1.css">
</head>
<body>

<form action="/ma-page-de-traitement">
    <div>
        <label for="prénom">Prénom :</label>
        <?php echo $_SESSION['prenom']?>
               
    </div>
    <div>
        <label for="nom">Nom :</label>
        <?php echo $_SESSION['nom']?>
    </div>
    <div>
        <label for="age">Age :</label>
        <?php echo $_SESSION['age']?>
    </div>
</form>

    
</body>
</html>






    

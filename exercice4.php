##Exercice 4 Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui 
les affiches.







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
        <label for="pseudo">pseudo :</label>
        <input type="text" id="pseudo" name="pseudo">
        <?php setcookie('pseudo', '100drine', time() + 365*24*3600, null, null, false, true);?>
        <?php echo $_COOKIE['pseudo']; ?>      
    </div>
    <div>
        <label for="motDePasse">Mot de passe :</label>
        <input type="text" id="motDePasse" name="motDePasse">
        <?php setcookie('motDePasse', 'azertyuiop', time() + 365*24*3600, null, null, false, true);?>
        <?php echo $_COOKIE['motDePasse']; ?>
    </div>

</form> 
</body>
</html>
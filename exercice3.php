##Exercice 3 Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
A la validation du formulaire, stocker les informations dans un cookie.



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
               
    </div>
    <div>
        <label for="motDePasse">Mot de passe :</label>
        <input type="text" id="motDePasse" name="motDePasse">
        <?php setcookie('motDePasse', 'azertyuiop', time() + 365*24*3600, null, null, false, true);?>
    </div>

</form> 
</body>
</html>
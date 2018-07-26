#PHP - Variables superglobales, sessions et cookies Dans tous les exercices, 
il faudra faire une page HTML 5 valide et soigner son CSS. 
##Exercice 1 Faire une page HTML permettant de donner à l'utilisateur :

    son User Agent
    son adresse ip
    le nom du serveur
    
    //print_r($_SERVER);

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="exercice1.css">
</head>
<body>

<form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="UserAgent">User Agent :</label>
        <?php echo $_SERVER["HTTP_USER_AGENT"]?>
               
    </div>
    <div>
        <label for="adresseIp">adresse Ip :</label>
        <?php echo $_SERVER["REMOTE_ADDR"]?>
    </div>
    <div>
        <label for="nom_serveur">Nom du serveur :</label>
        <?php echo $_SERVER["SERVER_NAME"]?>
    </div>
</form>




  
</body>
</html>
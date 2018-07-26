##Exercice 5 Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.


<?php setcookie('pseudo', '100drine', time() + 365*24*3600, null, null, false, true);?>
<?php setcookie('motDePasse', 'azertyuiop', time() + 365*24*3600, null, null, false, true);?>

<?php echo $_COOKIE['pseudo']; ?>
<?php echo $_COOKIE['motDePasse']; ?>

<?php setcookie('pseudo', 'toto', time() + 365*24*3600, null, null, false, true); ?>
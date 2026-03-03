<?php

require_once 'reader.php';


// exercice 1

$reader = new Reader("moi@email.com", "motdepasse123");
$reader->addBookToFavorites("Le Hobbit");
$favs = $reader->addBookToFavorites("Le Seigneur des Anneaux");

//exercice 2

echo "Livres favoris :";
print_r($favs);


//exercice 3

$favs = $reader->removeBookFromFavorites("Le Seigneur des Anneaux");

//exercice 4

echo " Après suppression :";
print_r($favs);

// exercice5 

$infos = $reader->login();
echo "Email : " . $infos["login"];
echo "Mot de passe : " . $infos["password"];
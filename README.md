sélectionnés# Template pour : Quêtes  PHP Cookies & Sessions

Ce Template html va te permettre de réaliser ta quête sur la gestion des cookies et des sessions avec PHP.

Sont inclus :

* la page de connexion,
* la page des produits disponibles a l'achat,
* la page panier, affichant à partir des cookies les produits sélectionnés par l'utilisateur.

Tu n'as que du script PHP à fournir !

Après, si l'envie te prend de refondre le CSS, nous ne ferons rien pour t'en empêcher !

1- Si pas de session, va sur page LOGIN.

2- Si dans lOGIN, pas de session, message d'erreur, et redirection sur LOGIN
(Par définition de "1").

3- Sur la page LOGIN, Si la session existe ($_SESSION), alors on redirige sur 
'index.php' .

4-Dans LOGIN, si la session existe, on redirige vers le repertoire racine "/" .
(le repertoire racine qui contient 'index.php'), et on bloque l'accées a LOGIN.

5-Si on va dans LOGOUT, ca redirige vers LOGIN et ça met fin a la session.

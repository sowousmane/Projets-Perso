OUSMANE SOW 
NDIAGNA SECK 
Licence 3 informatique

Ce jeu consiste à donner la possibilité à un utilisateur (inscrit ou qui est en mode invité) à travers une carte du monde de jouer. En localisant un pays selon une question donnée aléatoirement, cette question contient une devinette et un drapeau.

S’il trouve le pays demandé, on l’indique l’état de la réponse si ou non il a trouvé ou si la marge d’erreur (d’éloignement par rapport à la localisation) on l’attribut des points.

Nous avons choisit de faire le jeu selon deux thème un amusant et l’autre curieux et aussi le joueur doit choisir son continent de jeu selon sa culture générale.

Conception de la base de données Interface
Page d’accueil

Sur cette page nous avons deux carrousels puis une petite présentation du jeu et un menu. De cette page vous pouvez aller partout, nous contacter par téléphone, mail, nous envoyer un commentaire, vous connectez, vous inscrire ou jouer comme inviter.
Vous allez également trouver l’onglet bon coin où vous avez un sous menu où vous pouvez avoir une carte aléatoire, acheter une carte, nous vous donnons encore des idées cadeaux.
Un onglet présentation qui a deux sous menus : une présentation (qui présente le jeu) et l’autre qui sommes-nous (qui nous présente)
Si vous choisissez de jouer sans vous connecter.
L’image ci-dessous donne une illustration du menu et des carrousels

En appuyant sur le bouton laissez-vous un commentaire, on vous affiche la div correspondante. Illustration suivante.


Pour vous connecter, il suffit de click sur le bouton contactez-vous dans le menu pour qu’on vous redirige vers cette partie.


Avec le bouton Connexion, vous pouvez vous connecter en mettant votre mail et mot de passe. Vous pouvez aussi cocher le bouton Restez connecté(e) pour rester connecté.
Si le mail ou le mot  de  passe  n’est  pas  correct,  l’accès  est  refuse  et  une  erreur  affichera « Mauvais identifiants ».



Si vous n’avez pas encore un compte de chez nous, vous pouvez vous inscrire en cliquant sur le bouton inscription dans le menu.
Les comptes sont stockés dans une table de votre base de données.


 si les champs ne sont pas ou à moitié remplies, vous aurez une erreur « tous les champs doivent être remplis ».



Nous avons un bouton À propos qui contient une liste de deux ligne : Présentation et Qui sommes-nous ?


Dans le champs « le bon coin » vous trouverez la liste contenant les lignes suivantes : acheter une carte, une carte aléatoire et idées cadeaux qui sont des liens vers des sites externes.


Interface du site selon le continent

Pour jouer, Vous pouvez jouer sans vous connecter ou vous connecter et ensuite jouer

Jouer sans vous vous connecter

Le bouton « jouer sans vous connecter » qui se trouve dans le menu vous redirige vers la page comme sur la photo ci-dessous.
Comme le joueur n’est pas connecter, il ne peut que jouer sur un contient qui est l’Afrique.

Pour jouer sur les autres continents il faut se connecter d’abord. Un message est affiche pour ça.




Après avoir cliqué sur le bouton Afrique, un modale affichera avec deux buttons : Amusant et Curieux.
Nous avons divisé les questions en deux thèmes : amusants et curieux Le joueur doit choisir un thème entre les deux pour pouvoir jouer.
L’image ci-dessous est une parfaite illustration.



Quand le joueur appuie sur amusant ou curieux, on charge la page des questions correspondantes.

En appuyant sur le bouton « appuyer ici » les questions vont s’afficher aléatoirement .

Et le joueur peut clic sur la carte la pays du pays et ensuite un score lui est attribut selon la distance rpar rapport au coordonées du pays.



Jouer en vous connectant:

Quand le joueur est connecté, on lui affiche un message bonjour avec son pseudo, et ses scores précédents. Ses scores sont stockés dans notre base de données. Quand il finit, il peut se déconnecter.


Conclusion
Le projet nous a permis de nous familiariser avec les langages telles que HTML5, CSS3, JavaScript, PHP, et avec les Framework comme Boostrap, JQuery, Ajax.

Il nous a permis aussi de gère une base de données avec WAMP et intègre la base de données dans le JavaScript et php.

Même avec ce moment difficile à cause de la pandémie, nous avons pu travail en équipe ce qui n’était pas facile.

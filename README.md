Systeme de newsletter / User management
=======================================

Réalisez deux pages d'inscription et de connexion avec le framework PHP  Symfony 2/3 :

Parametres techniques :
-----------------------
 -- Créez une entité sous le nom : USER contenant les champs suivants :
 -- ID, Nom, Prénom , Email ,Mot de passe (Crypté et solt) , Activation de compte , Date d’inscription ,Rôle d’utilisateur (« client », « admin »)
une fois l'inscription est faite , redirigez la directement sur la page de connexion
 
Systeme de newsletter
---------------------
 --Créez un newsletter avec le user role admin
 --> Créez une fonctionnalité permettant d'envoyez ce newsletter a un un grand nombre de personnes.

What's inside?
--------------
-- FOSUserBundle
-- IbrowsNewsletterBundle
-- StfalconTinymceBundle

How to install it
-------------
1 - git clone https://github.com/geekdoos/TestTechniqueSymfony.git
OR
1 - Download the zip file from the GitHube web site [1]https://github.com/geekdoos/TestTechniqueSymfony

2 - cd to your TestTechniqueSymfony directory

3 - do this command on the terminal **composer install** from the CMD(windows) or from the terminal(linux)
Enjoy!

All the Routes you need
-----------------------
-- /login ==> http://127.0.0.1/app.php/login
-- /register ==> http://127.0.0.1/app.php/register
-- /newsletter ==> http://127.0.0.1/app.php/newsletter

NB: It's not finalized / Il n'est pas finalisé

#GeeKDooS (KHACHIAI Oussama)

[1]https://github.com/geekdoos/TestTechniqueSymfony/archive/master.zip
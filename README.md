# Disko_test

# Installation

##Etape 1
Cloner le repository
>git clone 

##Etape 2
Installer composer
>composer install

##Etape 3
Modifier le fichier .env à la ligne 27 en renseignant vos informations de connexion à la base de données : 
>DATABASE_URL=mysql://sofian:sofian@127.0.0.1:3306/disko_test

##Etape 4
Créer la base de données :
>php bin/console doctrine:database:create

##Etape 5
Création des tables :
>php bin/console doctrine:schema:update --force

##Etape 6
Création des fixtures :
>php bin/console doctrine:fixtures:load


##Etape 7
Lancer le serveur :
>php bin/console server:run

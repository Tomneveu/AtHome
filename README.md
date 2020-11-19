## RÉCUPÉRER LE PROJET EXISTANT

- installer WAMP (Windows) ou MAMP (MAC)

- dans htdocs (ou www) : créer un nouveau dossier pour accueillir le projet, puis :
```
git init
```
```
git remote add origin https://github.com/Tomneveu/AtHome.git
```
```
git pull origin master
```

- ouvrir le terminal de commande, puis entrer les commandes suivantes :
```
cd chemin_vers_le_dossier_htdocs/www/AtHome
```

- bien vérifier la présence du fichier .env, puis :
```
composer update
```

- recréer la base de données :
```
php bin/console doctrine:database:create
```

- recréer les tables :
```
php bin/console doctrine:migrations:migrate
```

- recréer des données :
```
php bin/console doctrine:fixtures:load
```
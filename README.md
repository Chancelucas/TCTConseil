# TRTConseil

##Install composer :
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
```
composer create-project symfony/skeleton:"7.1.*" TCTConseil
```
puis dans le projet
```
composer require webapp
```
```
php bin/controller make:controller HomeController
```



##Install symfony : 
```
composer create-project symfony/skeleton:"^5.4" mon_repertoire_de_projet
cd mon_repertoire_de_projet
```



##Init projet on github with git : 
```
git init
```
```
git remote add origin https://github.com/Chancelucas/TCTConseil.git
```
```
git checkout -b dev
```
```
git add .
```
```
git commit -m "init project"
```
```
git push -u origin dev
```

## Besoin de : 

### Adminier pour la gestion de la BDD en MySQL : 

https://www.adminer.org/ -> download :
Adminer 4.8.1 for MySQL (.php, 356 kB), English only (.php, 208 kB)

Inculure ce document dans le dossier Public de notre application

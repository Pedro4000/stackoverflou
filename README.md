<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Projet Stackoverflou laravel

- Pour installer le projet 
- git clone git@github.com:Pedro4000/stackoverflou.git
- cd stackoverflou 
- pour rentrer dans le projet
- composer install 
- pour installer les dependances nécessaire à l'appli
- cp .env.example .env
- pour créer le .env à partir du .env.example, ensuite on précise les infos qu'il faut dans le .env notamment le nom de la base de donnée, le mdp et le user
- php artisan migrate:fresh
- pour runner les migrations
- sudo chgrp -R www-data ./
- sudo chmod -R 775 ./storage
pour mettre les bonnes autorisation aux dossiers et on est prêts
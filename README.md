# IKAUBAYA
 
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p> 

## Langkah Instalasi

1. Clone Project dengan command "git clone".
2. Jalankan command composer install, apabila error, update composer terlebih dahulu dengan command composer update.
3. Tulis command "cp .env.example .env".
4. Lalu tulis lagi command "php artisan key:generate".
5. Masuk kedalam file .env, lalu ubah nama database menjadi wfp_uas.
6. Buat database pada phpmyadmin dengan nama wfp_uas.
7. Jalankan command php artisan migrate:fresh.
8. Lalu jalankan command php artisan db:seed untuk mengisi table pada database.
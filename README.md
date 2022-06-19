# Simple Catalog Laravel Website

Simple Catalog Laravel Website to make website to display any product. You can use it for anything.

## Feature

A. Frontend
Product Catalog

B. Backend
- Dashboard
- Management:
1. Product
2. User

C. API
( No API )

## Tech stack
Programming Languages: PHP
Frameworks: Laravel 8
Database: MySQL
Front-End               : HTML/JavaScript/CSS, Bootstrap
Library                 : 
- laravel/ui, using for Login / Register / Forget Password template.
- laravel/sanctum, using for API token.
- yajra/laravel-datatables-oracle, using for dynamic tables in Dashbaord.
Other: GitHub, Visual Studio Code, Composer, NPM, Postman, Apache

## Installation
- Clone the repo and `cd` into it
- Run `composer install`
- Run `npm install`
- Rename or copy `.env.example` file to `.env`
- Run `php artisan key:generate`
- Set your database credentials in your `.env` file
- Run `php artisan migrate --seed`
- Run `php artisan storage:link`

Tutorial from M. Faiz Triputra : https://www.youtube.com/watch?v=Sv3GmVoedMQ&t=173s

## CPanel Deployment
Assume you deploy wherever on domain or subdomain in CPanel, so you will use default root that is automatically created by CPanel. You can follow my tutorial : 

https://medium.com/@m.faiztpaduhai/deploy-laravel-ke-shared-hosting-cpanel-dari-private-github-repository-854a4620c8aa

Just in case you deploy in the main domain, and you can't change the root you can change symlink,

https://medium.com/@m.faiztpaduhai/symbolic-links-to-public-html-9b637ec3b20c

After deployment there's few thing to prepare, specially change to production environment, just follow

https://stackoverflow.com/questions/59663762/laravel-what-steps-should-one-take-to-make-a-laravel-app-ready-for-production

## All links related to this project
Please contact me (@faiz_triputra at Instagram)

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Volcano Project
## About This Project

The **volcano project** is intended to be a starting point for other projects based on the laravel framework. Containing in this boilerplate several packages that can aid and accelerate the construction of your web projects.

## Prerequisites
* Laravel >= 5.6.*
* PHP >= 7.0
* Composer >= 1.6.5
* Deployer >= 6.2

## Packages included

### Production
* acacha/admin-lte-template-laravel:^6.0
* arcanedev/log-viewer:^4.5
* barryvdh/laravel-dompdf:^0.8.2
* imanghafoori/laravel-widgetize:^1.8
* intervention/image:^2.4
* jenssegers/date:^3.4
* jpgraph/jpgraph:^4.0
* laravelcollective/html:^5.6
* maatwebsite/excel:^3.0
* renatomarinho/laravel-page-speed:^1.8
* spatie/laravel-menu:^3.1
* tymon/jwt-auth:^0.5.12


### Development
* barryvdh/laravel-debugbar:^3.1
* barryvdh/laravel-ide-helper:^2.4
* deployer/deployer:^6.2
* laravel/dusk:^3.0

## Cloning this project
To use this project, you must type the following line in your command terminal

```bash

git clone git@github.com:fsclaro/volcano.git

```

after cloned, run commands below in terminal:

```bash

- composer install
- artisan key:generate

```

Then edit `.env` to modify database and others parameters and run the command in terminal:

```bash

artisan migrate

```

## Internalization

This project is configured for the Brazilian language with the *timezone* configured for **America/Sao_Paulo** and *locale* for **pt-br**. If you are of another nationality, simply edit the *config/app.php* file and customize the *timezone* and *locale* parameters according to your need.

## Contribution
If you have good ideas to make this project better, read the [contribution guidelines](https://github.com/fsclaro/vulcan/_doc/CONTRIBUTING.md) on contributions and send me an email to fsclaro@gmail.com

## Code of Conduct
It is very important that you read our [code of conduct](https://github.com/fsclaro/_doc/CODE_OF_CONDUCT.md) so that there is a healthy coexistence among all members participating in this project.

## Security Vulnerabilities
If you discover a security vulnerability within this project, please send an e-mail to [fsclaro@gmail.com](mailto:fsclaro@gmail.com). All security vulnerabilities will be promptly addressed.

## License
This project is open-sourced software licensed under the [MIT license](https://github.com/fsclaro/vulcan/LICENSE.md).

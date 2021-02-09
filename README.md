# Patient Prism Interview Exercise

## Introduction

The masterminds at CalcTek have decided to revolutionize the calculator industry by building an API driven calculator. Genius! They've tasked you with developing the project.

### Requirements

Build an API that supports four types of calculation operators:

-   Addition
-   Subtraction
-   Division
-   Multiplication

Every calculation should be stored for historical reference.

A calculator interface should be created (Vue.js) that allows the user enter their calculation and receive a response.

A "ticker tape" interface should be built that shows all previous calculations with the ability to delete an individual calculation or clear all previous calculations.

### Stretch Goal

To really impress the customers of CalcTek, your calculator should support more complex calculation chains and even additional calculation operators:

`sqrt((((9*9)/12)+(13-4))*2)^2)`

## Pre-requisites

- PHP ^8.0.
- A MySQL database connection with username and passwords
- Copy the .env.example file and rename it as .env.
- Fill the values of the database connection into the .env file.
- Yarn or NPM installed globally.

## Installation requirements

- Install required packages.

```
composer install
```

- Generate key for application.

```
php artisan key:generate
```

- Execute db migrations.

```
php artisan migrate:install
```

- Install NPM packages.

```
yarn install
```

or

```
npm install
```

- Generate the front-end files for prod env.

```
yarn prod
```

or

```
npm run prod
```

- Generate the front-end files for dev env.

```
yarn dev
```

or

```
npm run dev
```

- Generate the front-end files for dev env with autoloading.

```
yarn watch
```

or

```
npm run watch
```

## Tests

You can run the tests suit with the next commands:

```
php artisan test
```

or

```
vendor/bin/phpunit
```

You can specify if the tests should run in parallel with `x` processes as there are available CPU cores on your machine where `x` is an integer number.

```
php artisan test --parallel --process=x
```

For static analysis

```
php composer larastan
```

# TODO:

- Add Front-end tests using Laravel Dusk.
- Add the feature of the Stretch Goal section.

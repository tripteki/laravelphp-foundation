<h1 align="center">Foundation</h1>

Foundation is a core for Trip Teknologi's Laravel.php Codebase.

Getting Started
---

Installation :

```
$ composer require tripteki/laravelphp-foundation
```

How to use :

- Publish config file in the root of your project's directory with running :

```
php artisan vendor:publish --tag=tripteki-laravelphp-foundation
```

- Put this to your `composer.json` file in the root of your project's directory :

```json
"autoload": {

    "psr-4": {

        "Src\\": "src/"
    }
}
```

Author
---

- Trip Teknologi ([@tripteki](https://linkedin.com/company/tripteki))
- Hasby Maulana ([@hsbmaulana](https://linkedin.com/in/hsbmaulana))

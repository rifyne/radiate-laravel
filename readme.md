Radiate Laravel
=======
A Laravel starter preset to bootstrap your new apps.

### Tell me more...

Radiate is a [Laravel](http://www.laravel.com) preset that applies sensible defaults when creating new laravel projects. It's just a quick mod to the default laravel install to gain a few features often used by devs.

### What's Included

* add editorconfig file to root

* add eslint support via preconfigred laravel based eslintrc.js file, including vue support.

* [font awesome](https://github.com/FortAwesome/Font-Awesome) support (sassy as well)


## How to use

Add this repo to your `composer.json` file in a new laravel app:

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/rifyne/radiate-laravel"
    }
]
```

Require the source so it's added to your vendor directory:

```
composer require rifyne/radiate-laravel --dev

```

Run the radiate artisan command to stub out the contents of this repo

```
php artisan radiate
```



## GULP





## Updates
__V5__
* Dec 07 2018
* Nov 01 2018 refined and renamed

__v3__
* OCT 2015 WIP

__V2__

* FEB 03, 2015: Version 5 of HTML 5 Boiler Plate tweaks
* JAN 27, 2015: V2 of Laravel Radiate, latest Laravel: 4.2.16

__V1__

* NOV 29, 2014: (latest Laravel: 4.2.11)
* AUG 13, 2014: (latest Laravel: 4.2)
* JUL 07, 2013: (latest Laravel: beta)
* MAY 05, 2013: (latest Laravel: beta)
* APL 23, 2013: (latest Laravel: beta)
* MAR 29, 2013: (latest Laravel: beta)

radiate
=======
A Laravel 4 starter package with HTML5 Boiler Plate, Twitter Bootstrap, Font Awesome, SASS, and a quick little login/register script to get you started. Nothing else (but a Boxfile for those who deploy to pagodabox)

### Tell me more...

Radiate is a [laravel 4](http://four.laravel.com) project that uses sensible defaults when creating new HTML5/php projects. No packages were included, it's just a quick mod to the html/php to gain a few features often used by devs.

### How it was Created

* The index.html file from [HTML5 BoilerPlate](http://html5boilerplate.com/) was turned into a view layout using blade templating. 

* The js, css, ico, and img files of H5BP have been added to their corresponding asset directory (assets directory structured per [github style guide](https://github.com/styleguide).

* The suggested .htaccess file from H5BP is included.

* [Twitter Bootstrap](twitter.github.com/bootstrap/) css and js (sassy!)

* [font awesome](https://github.com/FortAwesome/Font-Awesome) support (sassy too!)

* A Boxfile and Boxfile.install is included for those hosting their project on [pagodabox.com](http://pagodabox.com).


## How to use

1. Clone the code into your web dev environment: `git clone git@github.com:cborgia/radiate.git www`
2. cd into www `cd www`
3. call composer update `composer update`
4. start a server to make sure it's all good: `php artisan serve`
5. setup new key: `php artisan key:generate`
6. Get to work


## Updates
* Updated May 5, 2013 (latest Laravel beta)
* Updated April 23, 2013 (latest Laravel beta)
* Updated March 29, 2013 (latest Laravel beta)
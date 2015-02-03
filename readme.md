radiate
=======
A Laravel starter package with HTML5 Boiler Plate, Bootstrap, Font Awesome, SCSS, and a quick little login/register script to get you started. Nothing else.

### Tell me more...

Radiate is a [laravel 4](http://four.laravel.com) project that uses sensible defaults when creating new HTML5/php projects. No packages were included, it's just a quick mod to the html/php to gain a few features often used by devs.

### How it was Created

* The index.html file from [HTML5 BoilerPlate](http://html5boilerplate.com/) (H5BP v5) was turned into a view layout using blade templating. 

* The js, css, ico, and img files of H5BP have been added to their corresponding asset directory.

* All the dotfiles from h5bp have been included at the root of the project.

* [Bootstrap](getbootstrap.com) css and js (sassy)

* [font awesome](https://github.com/FortAwesome/Font-Awesome) support (sassy as well)


## How to use

1. Clone the code into your web dev environment: `git clone git@github.com:cborgia/radiate.git www`
2. cd into www `cd www`
3. call composer update `composer update --prefer-source`
4. start a server to make sure it's all good: `php artisan serve`
5. setup new key: `php artisan key:generate`
6. Get to work making something awesome.

_(you'll need to setup your ENV and migrate the user table to the DB if you want to capture data from the user registrations form)._

## GULP

Gulp support was added in Radiate v2, to use gulp with radiate please make sure you have [gulp installed globally](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md), then run `npm install` from the root of your new radiate project. Edit gulpfile.js to taste (the only thing that needs to be edited at the start is the browsersync proxy address).




## Updates
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
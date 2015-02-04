Less4Laravel
============

Allows you to use [Less](http://lesscss.org//) in [Laravel 5](http://laravel.com/) with
no fuss, no muss.

Documentation for using Less4Laravel with Laravel 4 is in the [README_L4.md](README_L4.md) file.

License
==========

Less4Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT), the same license Laravel uses.

Installation
============

Via Composer

````
$ composer require jtgrimes\less4laravel
````

Once Composer has installed or updated your packages you need to register
Less4Laravel with Laravel itself. Open up `app/config/app.php` and 
find the providers key towards the bottom and add:

```php
'Jtgrimes\Less4laravel\LessServiceProvider'
```

In the aliases section, add:

```php
'Less'	=>	'Jtgrimes\Less4laravel\LessFacade'
```

Configuration
=============

In order to work with the configuration file, you're best off publishing a copy
with Artisan:

```
$ php artisan vendor:publish jtgrimes/less4laravel
```

The defaults are:

* Recompile whenever the .less file is updated.  (Recompilation only happens when the
named file is changed.  If other files are imported, changing them will *not* trigger
a recompile.)
* Store .less files in etc/less
* Store generated .css files in public/css
* Link to /css/filename.css
* Don't minify the generated css file

All of these defaults can be changed in `/app/config/less4laravel.php`.

Additionally you can (and probably should) have different configurations for development 
and production.  Specifically, you probably don't want to be generating css files on
your production server, since it will slow down your site.

In order to have different configs on your development and production servers, you'll do somethin
like this:

Open up less4laravel.config and change `'compile_frequency' => 'changed',` to
````php
    'compile_frequency' => env('LESS4LARAVEL_FREQUENCY', 'never'),
````
You can use any environment variable name you want -- L4L_FREQ is an example.  The second variable
is the default value and probably should be the value you want in production.

In your local `.env` file, add
````php
    'LESS4LARAVEL' => 'changed',
````

Usage
=====

In your view file, just call `Less::to('file')` to compile the .less file (if needed) and generate a link to the output css file.

To add properties to your link, just put them in an array as the second variable to the `to` function:
`Less::to('filename',array('media'=>'print'))` will 
generate `<link media="print" type="text/css" rel="stylesheet" href="http://localhost/css/filename.css">`



Credits
=======

Less4Laravel doesn't exist without Leaf Corcoran's [lessphp](http://leafo.net/lessphp/).  
lessphp doesn't exist without [LESS](http://lesscss.org/).
Less4Laravel also requires Taylor Otwell's [Laravel](http://laravel.com/) framework.
The readme is largely boosted from Rob Crowe's readme for (the very awesome) [TwigBridge](https://github.com/rcrowe/TwigBridge).

<?php
return array(
    /*
    |--------------------------------------------------------------------------
    | Compilation frequency
    |--------------------------------------------------------------------------
    |
    | This option controls how often your less files are (re)compiled
    | Possible values:
    |    all: 		re-compile less files every time.
    |				Generally, use only when developing .less files
    |    changed:	re-compile when less files are changed.
    |				Generally, use this option if your less files don't 
	|				include other files
    |    cached:    re-compile when any imported less files are changed.
    |				Generally, use this during most development
    |	 never:		do not re-compile less files
    |				Generally, use this in production.  Once you've got your css
    |				files generated, don't change them in production
    |
    */
    'compile_frequency' => 'cached',

    /*
    |--------------------------------------------------------------------------
    | Source folder
    |--------------------------------------------------------------------------
    |
    | Where should we look for .less files?
    | default: resources/assets/less
    */
    'source_folder' => base_path('resources/assets/less'),

    /*
    |--------------------------------------------------------------------------
    | Target folder
    |--------------------------------------------------------------------------
    |
    | Where should we save compiled css files?
    | default: public/css
    */
    'target_folder' => public_path('css'),

    /*
    |--------------------------------------------------------------------------
    | Cache folder
    |--------------------------------------------------------------------------
    |
    | Where should we save cache file?
    | default: storage/framework/cache
    */
    'cache_folder' => storage_path('framework/cache'),

    /*
    |--------------------------------------------------------------------------
    | Link folder
    |--------------------------------------------------------------------------
    |
    | When we generate a link to the css file, where should it point?
    | default: /css
    */
    'link_folder' => '/css',

    /*
    |--------------------------------------------------------------------------
    | Formatter
    |--------------------------------------------------------------------------
    |
	| This option controls the formatting of the output css file
	| Possible values:
	|    lessjs:	 Same style used in LESS for JavaScript (default)
	|    compressed: Removes all unnecessary whitespace (minifies)
	|	 classic:	 The original LessPHP formatter
    | default: lessjs
    */
    'formatter' => 'lessjs',


);

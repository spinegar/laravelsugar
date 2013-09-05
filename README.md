Bridge Package for Laravel 4 and the SugarCRM REST API Wrapper Class
=========================================================
SugarCRM REST API Wrapper Class by Asa Kusuma
 - https://github.com/asakusuma/SugarCRM-REST-API-Wrapper-Class

Bridge Package for L4 by Sean Pinegar

http://www.seanpinegar.com

License: MIT


Contents
--------
1. About
2. Installation
3. Configuration
4. Usage Example


1.About
-------
- Bridge Package for Laravel and SugarCRM REST API Wrapper Class
- Creating, reading, and updating capability
- More info on SugarCRM: http://www.sugarcrm.com/
- API docs: http://developers.sugarcrm.com/
- Designed to work with SugarCRM v.6

2. Installation via Composer
----------------------------
Edit composer.json

	{
		"repositories": [
			{
				"type": "vcs",
				"url": "https://github.com/spinegar/laravelsugar"
			}
		],
		"require": {
			"laravel/framework": "4.0.*",
			"spinegar/laravelsugar": "dev-master"
		},
		"minimum-stability": "dev"
	}

Then install with composer

	$ composer install


3. Configuration
----------------
Add the service provider in app/config/app.php

	'Spinegar\LaravelSugar\Sugar6ServiceProvider'
	
Add the facade in app/config/app.php

	'Sugar' => 'Spinegar\LaravelSugar\Facades\Sugar'
	
Publish the configuration to app/config/ via artisan

	$ php artisan config:publish spinegar/laravelsugar
	
Update the configuration file at app/config/packages/spinegar/laravelsugar/config.php


4.Usage Example
---------------

	Sugar::get("Accounts",array('id','name'));
	
See https://github.com/asakusuma/SugarCRM-REST-API-Wrapper-Class for more examples.

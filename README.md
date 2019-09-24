# ModuleTests

PHPUnit testing scaffold for CodeIgniter 4 modules

## Overview

Not a module itself but a testing scaffold for CodeIgniter 4 modules,
**module-tests** makes it easy to setup PHPUnit tests in your modules.

To read more on Unit Testing in CodeIgniter 4 visit the
[User Guide](https://codeigniter4.github.io/userguide/testing/index.html).

## Installation

Clone or download this repo and place **src/tests** and **src/phpunit.xml.dist** in your
project root. Add the following lines to **composer.json**:
```
	"repositories": [
		{
			"type": "vcs",
			"url": "https://github.com/codeigniter4/CodeIgniter4"
		}
	],
	"minimum-stability": "dev",
	"require-dev": {
		"phpunit/phpunit" : "^7.0",
		"mockery/mockery": "^1.0",
		"codeigniter4/codeigniter4": "dev-develop"
	},
	"autoload-dev": {
		"psr-4": {
			"ModuleTests\\Support\\": "tests/_support"
		}
	},
	"scripts": {
		"test": "phpunit",
		"post-update-cmd": [
			"composer dump-autoload"
		]
	}
```

If you are using version tracking you should exclude test results by adding this to
**.gitignore**:
```
vendor/
build/
phpunit*.xml
phpunit
composer.lock
```

Examples of **composer.json** and **.gitignore** are located in the [examples/](examples/)
folder if you need a starting point.

## Updating

As this repo is updated with bugfixes and improvements you will want to update your
modules that use it. Because files need to be copied in place manually you will have to
handle updates manually by cloning or downloading this repo and merging changed files
into your project. "Watch" this repo to be notified of new releases and changes.

## Creating Tests

See the docs on [Creating Tests](docs/CREATING.md).

## Running Tests

From your package root run `composer install` (or `composer upgrade`) to install all the
required support packages, then run `composer test` to initiate the tests. Test results
and code coverage will be written to standard output and formatted log versions will go
in **build/logs/**.

## Code Coverage

See the docs on [Code Coverage](docs/COVERAGE.md).

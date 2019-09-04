# ci4-module-tests
Testing scaffold for PHPUnit tests in CodeIgniter 4

## Overview

**CIModuleTests** is intended to be integrated into third-party modules for CodeIgniter 4.
It provides a scaffold and basic examples of how to perform module testing dependent on the
framework without being integrated into a specific project.

For more on Testing in CodeIgniter 4 visit the
[User Guide](https://codeigniter4.github.io/CodeIgniter4/testing/).

## Install

1. Clone this repo and merge the **tests** folder and **phpunit.xml.dist** and
**composer.json**<sup>1</sup> files from **src/** into the root of your module. 
2. From your package root run `composer install` to install all the required support packages.
3. Run `composer test` to initiate the tests.

<sup>1</sup> Note: Unless you are starting fresh you likely will already have your own version of
**composer.json**, in which case you will need to be sure to merge the following settings
for **CIModuleTests**:
* `repositories` needs an entry for `https://github.com/codeigniter4/CodeIgniter4`
* `require-dev` needs the CodeIgniter 4 repo, PHPUnit, and Mockery
* `autoload-dev` must supply the PSR4 namespace for the test supports

See the provided [composer.json](src/composer.json) for examples.

## Creating Tests

All tests go in the **tests/** directory. There are two generic subfolders for you,
**unit** and **database** but feel free to make your own. Tests must extend the appropriate
test case:
* For basic tests extend `CodeIgniter\Test\CIUnitTestCase`
* For database tests extend `CIModuleTests\Support\DatabaseTestCase`

Tests are individual methods within each file. Method names must start with the word "test":
`testUserSync()` `testOutputColor()` `testFooBar()`

### Database Tests

If you are using database tests that require a live database connect you will need to edit
**phpunit.xml.dist**, uncomment the database configuration lines and add your connection
details. Example directories and files are provided for test Seeds and Models, which you
can modify or replace with your own. Also be sure to modify
**tests/_support/DatabaseTestCase.php** to point to your seed and include any additional
steps in `setUp()`.

### Session Tests

Similarly there is a pre-configured test case available with a mock session configured to
make testing sessions easy: **tests/_support/SessionTestCase.php**.

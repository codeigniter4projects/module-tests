# Creating Tests

## Resources
* [CodeIgniter 4 User Guide on Testing](https://codeigniter4.github.io/userguide/testing/index.html)
* [PHPUnit docs](https://phpunit.readthedocs.io/en/8.3/index.html)
* [Mockery docs](http://docs.mockery.io/en/latest/)

## Test Cases

Every test needs a *test case*, or class that your tests extend. CodeIgniter 4
provides a few that you may use directly:
* `CodeIgniter\Test\CIUnitTestCase` - for basic tests with no other service needs
* `CodeIgniter\Test\CIDatabaseTestCase` - for tests that need database access

**ModuleTests** also provides some examples:
* `ModuleTests\Support\DatabaseTestCase` - for database tests, pre-configured for migrations, seeds, and models from **tests/_support**
* `ModuleTests\Support\SessionTestCase` - for session tests, pre-configured with a mock session driver

Most of the time you will want to write your own test cases to hold functions and services
common to your test suites.

## Tests

All tests go in the **tests/** directory. **ModuleTests** provides two generic
subfolders for you, **unit** and **database** - but feel free to make your own. Each test file
is a class that extends a **Test Case** (see above) and contains methods for the individual
tests. These method names must start with the word "test" and should have descriptive names
for precisely what they are testing: `testUserCanModifyFile()` `testOutputColorMatchesInput()`
`testIsLoggedInFailsWithInvalidUser()`

Writing tests is an art, and there are many resources available to help learn how. Review
the links above and always pay attention to your [Code Coverage](docs/COVERAGE.md).

### Database Tests

**ModuleTests** provides examples for migrating, seeding, and testing against a mock
or live<sup>1</sup> database. The example files can be modified or replaced with your own:
* **tests/_support/Database/Migrations/create_test_tables.php**
* **tests/_support/Database/Seeds/ExampleSeeder.php**
* **tests/_support/Models/ExampleModel.php**

Be sure to modify the test case (or create your own) to point to your seed and migrations
and include any additional steps to be run before tests in the `setUp()` method:
* **tests/_support/DatabaseTestCase.php**

<sup>1</sup> Note: If you are using database tests that require a live database connection you will need
to rename **phpunit.xml.dist** to **phpunit.xml**, uncomment the database configuration
lines and add your connection details. Prevent **phpunit.xml** from being tracked in your
repo by adding it to **.gitignore**.

### Session Tests

Similar to database testing, **ModuleTests** provides a test case pre-configured
with the [mock session class](https://codeigniter4.github.io/userguide/testing/overview.html#mocking-services)
to make testing sessions easier:
* **tests/_support/SessionTestCase.php**

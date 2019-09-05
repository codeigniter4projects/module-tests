# Code Coverage

> Code coverage is a term used in software testing to describe how much program source
> code is covered by a testing plan. -[TechnoPedia](https://www.techopedia.com/definition/22535/code-coverage)

## Overview

**ci4-module-tests** comes preconfigured to handle code coverage in addition to the unit tests.
You will need to have a code coverage driver installed to use this feature, such as
[Xdebug](https://xdebug.org).

## Setup

**ci4-module-tests** assumes your source code is in **src/**; if your code is somewhere else
then you will need to modify the following line in your PHPUnit XML file:
```
	<directory suffix=".php">./src</directory>
```

## PHPUnit.xml

**ci4-module-tests** includes a ready-to-use PHPUnit template in **phpunit.xml.dist**.
Common practice is to create a local copy of this file as **phpunit.xml** and add any
sensitive or environment info (like database connections). Prevent **phpunit.xml** from
being tracked in your repo by adding it to **.gitignore**.

> PHPUnit will always use **phpunit.xml** before **phpunit.xml.dist**, if it is found.

### Exclusions

In addition to the code source mentioned above, PHPUnit can be configured to exclude files
that are not relevant to testing or would otherwise cause the coverage calculations to fail.
**ci4-module-tests** starts with a few files common to CodeIgniter 4 but you may need to add
your own:
```
	<exclude>
		<directory suffix=".php">./src/Views</directory>
		<file>./src/Config/Routes.php</file>
	</exclude>
```

### Logging

Output is available in a variety of formats (see the [Logging Section](https://phpunit.readthedocs.io/en/8.3/logging.html)
of the PHPUnit Guide). You can adjust the default location and format of the reports by
modifying the `<logging>` tag:
```
	<logging>
		<log type="coverage-html" target="build/logs/html"/>
		<log type="coverage-clover" target="build/logs/clover.xml"/>
		<log type="coverage-php" target="build/logs/coverage.serialized"/>
		<log type="coverage-text" target="php://stdout" showUncoveredFiles="false"/>
		<log type="testdox-html" target="build/logs/testdox.html"/>
		<log type="testdox-text" target="build/logs/testdox.txt"/>
		<log type="junit" target="build/logs/logfile.xml"/>
	</logging>
```

For more information on using the PHPUnit XML file generally see the
[Configuration Section](https://phpunit.readthedocs.io/en/8.3/configuration.html)
of the guide.

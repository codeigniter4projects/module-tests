<?php

class ExampleTest extends \CodeIgniter\Test\CIDatabaseTestCase
{
	public function setUp(): void
	{
		parent::setUp();
		
	}

	public function simpleTest()
	{
		$test = defined('APPPATH');
		$this->assertTrue($test);
	}
}

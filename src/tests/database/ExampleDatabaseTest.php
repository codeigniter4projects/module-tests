<?php

class ExampleDatabaseTest extends CIModuleTests\Support\DatabaseTestCase
{
	public function setUp(): void
	{
		parent::setUp();
		
	}

	public function simpleDatabaseTest()
	{
		$model = new \CIModuleTests\Support\Models\ExampleModel();

		$objects = $model->findAll();
		
		$this->assertCount(3, $objects);
	}
}

<?php namespace CIModuleTests\Support;

class DatabaseTestCase extends \CodeIgniter\Test\CIDatabaseTestCase
{
    /**
     * Should the database be refreshed before each test?
     *
     * @var boolean
     */
    protected $refresh = true;

    /**
     * The name of a seed file used for all tests within this test case.
     *
     * @var string
     */
    protected $seed = 'CIModuleTests\Support\Database\Seeds\ExampleSeeder';

    /**
     * The path to where we can find the test Seeds directory.
     *
     * @var string
     */
    protected $basePath = SUPPORTPATH . 'Database/';

    /**
     * The namespace to help us find the migration classes.
     *
     * @var string
     */
    protected $namespace = 'CIModuleTests\Support';

    /**
     * @var SessionHandler
     */
    protected $session;

    public function setUp(): void
    {
        parent::setUp();
        
    }
}

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompetitorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompetitorsTable Test Case
 */
class CompetitorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompetitorsTable
     */
    public $Competitors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Competitors',
        'app.Users',
        'app.Tutors',
        'app.Colleges'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Competitors') ? [] : ['className' => CompetitorsTable::class];
        $this->Competitors = TableRegistry::getTableLocator()->get('Competitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Competitors);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

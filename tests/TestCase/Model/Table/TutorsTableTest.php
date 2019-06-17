<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TutorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TutorsTable Test Case
 */
class TutorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TutorsTable
     */
    public $Tutors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tutors',
        'app.Colleges',
        'app.Levels',
        'app.Students'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tutors') ? [] : ['className' => TutorsTable::class];
        $this->Tutors = TableRegistry::getTableLocator()->get('Tutors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tutors);

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

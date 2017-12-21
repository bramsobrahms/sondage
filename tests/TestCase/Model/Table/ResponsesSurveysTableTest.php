<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsesSurveysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsesSurveysTable Test Case
 */
class ResponsesSurveysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsesSurveysTable
     */
    public $ResponsesSurveys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.responses_surveys',
        'app.responses',
        'app.surveys'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ResponsesSurveys') ? [] : ['className' => ResponsesSurveysTable::class];
        $this->ResponsesSurveys = TableRegistry::get('ResponsesSurveys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ResponsesSurveys);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

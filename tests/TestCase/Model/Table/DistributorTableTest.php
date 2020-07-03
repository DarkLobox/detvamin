<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DistributorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DistributorTable Test Case
 */
class DistributorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DistributorTable
     */
    protected $Distributor;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Distributor',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Distributor') ? [] : ['className' => DistributorTable::class];
        $this->Distributor = TableRegistry::getTableLocator()->get('Distributor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Distributor);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

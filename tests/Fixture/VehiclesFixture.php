<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VehiclesFixture
 */
class VehiclesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'PLATE_NUMBER' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MODEL' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DISPLACEMENT' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MADE_BY' => ['type' => 'integer', 'length' => 50, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'TYPE_CODE' => ['type' => 'integer', 'length' => 100, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'MADE_BY' => ['type' => 'index', 'columns' => ['MADE_BY'], 'length' => []],
            'TYPE_CODE' => ['type' => 'index', 'columns' => ['TYPE_CODE'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['PLATE_NUMBER'], 'length' => []],
            'vehicles_ibfk_1' => ['type' => 'foreign', 'columns' => ['MADE_BY'], 'references' => ['manufacturer', 'MADE_BY'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'vehicles_ibfk_2' => ['type' => 'foreign', 'columns' => ['TYPE_CODE'], 'references' => ['type', 'TYPE_CODE'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'PLATE_NUMBER' => 'd3730a7f-8eca-4b6c-9973-6c6f5f220953',
                'MODEL' => 'Lorem ipsum dolor sit amet',
                'DISPLACEMENT' => 'Lorem ipsum dolor sit amet',
                'MADE_BY' => 1,
                'TYPE_CODE' => 1
            ],
        ];
        parent::init();
    }
}

<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RentalFixture
 */
class RentalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'rental';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'RENT_ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'RES_NUMBER' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PLATE_NUMBER' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'RES_NUMBER' => ['type' => 'index', 'columns' => ['RES_NUMBER'], 'length' => []],
            'PLATE_NUMBER' => ['type' => 'index', 'columns' => ['PLATE_NUMBER'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['RENT_ID'], 'length' => []],
            'rental_ibfk_1' => ['type' => 'foreign', 'columns' => ['RES_NUMBER'], 'references' => ['reservation', 'RES_NUMBER'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'rental_ibfk_2' => ['type' => 'foreign', 'columns' => ['PLATE_NUMBER'], 'references' => ['vehicles', 'PLATE_NUMBER'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'RENT_ID' => 1,
                'RES_NUMBER' => 1,
                'PLATE_NUMBER' => 'Lorem ipsum dolor '
            ],
        ];
        parent::init();
    }
}

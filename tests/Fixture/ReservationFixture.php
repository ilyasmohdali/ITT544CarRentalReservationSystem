<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservationFixture
 */
class ReservationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'reservation';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'RES_NUMBER' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'START_DATE' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'END_DATE' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'DAYS_RENT' => ['type' => 'integer', 'length' => 14, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PAYMENT' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'AGENCY_ID' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'USER_ID' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'AGENCY_ID' => ['type' => 'index', 'columns' => ['AGENCY_ID'], 'length' => []],
            'USER_ID' => ['type' => 'index', 'columns' => ['USER_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['RES_NUMBER'], 'length' => []],
            'reservation_ibfk_1' => ['type' => 'foreign', 'columns' => ['AGENCY_ID'], 'references' => ['agency', 'AGENCY_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'reservation_ibfk_2' => ['type' => 'foreign', 'columns' => ['USER_ID'], 'references' => ['users', 'USER_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'RES_NUMBER' => 1,
                'START_DATE' => '2019-05-18',
                'END_DATE' => '2019-05-18',
                'DAYS_RENT' => 1,
                'PAYMENT' => 1,
                'AGENCY_ID' => 1,
                'USER_ID' => 1
            ],
        ];
        parent::init();
    }
}

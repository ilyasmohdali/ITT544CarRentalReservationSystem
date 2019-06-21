<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $RES_NUMBER
 * @property \Cake\I18n\FrozenDate|null $START_DATE
 * @property \Cake\I18n\FrozenDate|null $END_DATE
 * @property int|null $DAYS_RENT
 * @property float|null $PAYMENT
 * @property int|null $AGENCY_ID
 * @property int|null $USER_ID
 */
class Reservation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'START_DATE' => true,
        'END_DATE' => true,
        'DAYS_RENT' => true,
        'PAYMENT' => true,
        'AGENCY_ID' => true,
        'USER_ID' => true
    ];
}

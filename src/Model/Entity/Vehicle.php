<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehicle Entity
 *
 * @property string $PLATE_NUMBER
 * @property string|null $MODEL
 * @property string|null $DISPLACEMENT
 * @property int|null $MADE_BY
 * @property int|null $TYPE_CODE
 */
class Vehicle extends Entity
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
        'PLATE_NUMBER' => true,
        'MODEL' => true,
        'DISPLACEMENT' => true,
        'MADE_BY' => true,
        'TYPE_CODE' => true
    ];
}

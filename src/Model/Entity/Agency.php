<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agency Entity
 *
 * @property int $AGENCY_ID
 * @property string|null $NAME
 * @property string|null $LOCATION
 * @property string|null $CITY
 */
class Agency extends Entity
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
        'NAME' => true,
        'LOCATION' => true,
        'CITY' => true
    ];
}

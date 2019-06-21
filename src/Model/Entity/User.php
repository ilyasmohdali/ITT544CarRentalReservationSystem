<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $USER_ID
 * @property string|null $NAME
 * @property string|null $ADDRESS
 * @property string|null $PHONE_NO
 * @property string|null $EMAIL
 * @property string|null $PASSWORD
 * @property int $ACCESS_CODE
 */
class User extends Entity
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
        'ADDRESS' => true,
        'PHONE_NO' => true,
        'EMAIL' => true,
        'PASSWORD' => true,
        'ACCESS_CODE' => true
    ];

    protected function _setPASSWORD($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $id
 * @property int $profile_id
 * @property string $LicenseNumber
 * @property string $VehicleNumber
 * @property string $LastName
 * @property string $FirstName
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Profile[] $profiles
 */
class Profile extends Entity
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
        'profile_id' => true,
        'LicenseNumber' => true,
        'VehicleNumber' => true,
        'LastName' => true,
        'FirstName' => true,
        'created' => true,
        'modified' => true,
        'profiles' => true
    ];
}

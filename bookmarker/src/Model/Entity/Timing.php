<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Timing Entity
 *
 * @property int $id
 * @property string $Date
 * @property \Cake\I18n\FrozenTime $Start_time
 * @property \Cake\I18n\FrozenTime $End_time
 */
class Timing extends Entity
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
        'Date' => true,
        'Start_time' => true,
        'End_time' => true,
        //making changes
        //#################################
        'CardNumber'=>true,
        'CardType'=>true,
        //'CVV'=>true,
        'ExpDate'=>true
        //################################
        
    ];
    
     
}

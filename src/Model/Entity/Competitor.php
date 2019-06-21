<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Competitor Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $tutor_id
 * @property int $college_id
 * @property bool $status
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Tutor $tutor
 * @property \App\Model\Entity\College $college
 */
class Competitor extends Entity
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
        'user_id' => true,
        'tutor_id' => true,
        'college_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'tutor' => true,
        'college' => true
    ];
}

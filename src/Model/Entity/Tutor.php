<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tutor Entity
 *
 * @property int $id
 * @property string $name
 * @property int $dni
 * @property int $college_id
 * @property int $phone
 * @property string $email
 * @property int $level_id
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\College $college
 * @property \App\Model\Entity\Level $level
 * @property \App\Model\Entity\Student[] $students
 */
class Tutor extends Entity
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
        'name' => true,
        'dni' => true,
        'college_id' => true,
        'phone' => true,
        'email' => true,
        'level_id' => true,
        'created' => true,
        'modified' => true,
        'college' => true,
        'level' => true,
        'students' => true
    ];
}

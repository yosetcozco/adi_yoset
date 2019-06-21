<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $name
 * @property int $dni
 * @property int $age
 * @property string $email
 * @property int $college_id
 * @property int $tutor_id
 * @property int $level_id
 * @property int|null $nota
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\College $college
 * @property \App\Model\Entity\Tutor $tutor
 * @property \App\Model\Entity\Level $level
 * @property \App\Model\Entity\Winner[] $winners
 */
class Student extends Entity
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
        'age' => true,
        'email' => true,
        'college_id' => true,
        'tutor_id' => true,
        'level_id' => true,
        'nota' => true,
        'created' => true,
        'modified' => true,
        'college' => true,
        'tutor' => true,
        'level' => true,
        'winners' => true
    ];
}

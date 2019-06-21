<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Winner Entity
 *
 * @property int $id
 * @property int $college_id
 * @property int $student_id
 * @property int $tutor_id
 * @property int $note
 *
 * @property \App\Model\Entity\College $college
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Tutor $tutor
 */
class Winner extends Entity
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
        'college_id' => true,
        'student_id' => true,
        'tutor_id' => true,
        'note' => true,
        'college' => true,
        'student' => true,
        'tutor' => true
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * College Entity
 *
 * @property int $id
 * @property int $code
 * @property string $name
 * @property string $director
 * @property string $email
 * @property int $phone
 * @property string $address
 * @property string $district
 * @property string $province
 *
 * @property \App\Model\Entity\Student[] $students
 * @property \App\Model\Entity\Tutor[] $tutors
 * @property \App\Model\Entity\User[] $users
 */
class College extends Entity
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
        'code' => true,
        'name' => true,
        'director' => true,
        'email' => true,
        'phone' => true,
        'address' => true,
        'district' => true,
        'province' => true,
        'students' => true,
        'tutors' => true,
        'users' => true
    ];
}

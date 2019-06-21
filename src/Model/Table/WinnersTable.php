<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Winners Model
 *
 * @property \App\Model\Table\CollegesTable|\Cake\ORM\Association\BelongsTo $Colleges
 * @property \App\Model\Table\StudentsTable|\Cake\ORM\Association\BelongsTo $Students
 * @property \App\Model\Table\TutorsTable|\Cake\ORM\Association\BelongsTo $Tutors
 *
 * @method \App\Model\Entity\Winner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Winner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Winner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Winner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Winner saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Winner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Winner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Winner findOrCreate($search, callable $callback = null, $options = [])
 */
class WinnersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('winners');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Colleges', [
            'foreignKey' => 'college_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tutors', [
            'foreignKey' => 'tutor_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->integer('note')
            ->requirePresence('note', 'create')
            ->allowEmptyString('note', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['student_id'], 'Students'));
        $rules->add($rules->existsIn(['college_id'], 'Colleges'));
        $rules->add($rules->existsIn(['tutor_id'], 'Tutors'));

        return $rules;
    }
}

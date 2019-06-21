<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reservation Model
 *
 * @method \App\Model\Entity\Reservation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reservation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Reservation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reservation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reservation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reservation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reservation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reservation findOrCreate($search, callable $callback = null, $options = [])
 */
class ReservationTable extends Table
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

        $this->setTable('reservation');
        $this->setDisplayField('RES_NUMBER');
        $this->setPrimaryKey('RES_NUMBER');
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
            ->integer('RES_NUMBER')
            ->allowEmptyString('RES_NUMBER', 'create');

        $validator
            ->date('START_DATE')
            ->allowEmptyDate('START_DATE');

        $validator
            ->date('END_DATE')
            ->allowEmptyDate('END_DATE');

        $validator
            ->integer('DAYS_RENT')
            ->allowEmptyString('DAYS_RENT');

        $validator
            ->numeric('PAYMENT')
            ->allowEmptyString('PAYMENT');

        $validator
            ->integer('AGENCY_ID')
            ->allowEmptyString('AGENCY_ID');

        $validator
            ->integer('USER_ID')
            ->allowEmptyString('USER_ID');

        return $validator;
    }
}

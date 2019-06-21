<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agency Model
 *
 * @method \App\Model\Entity\Agency get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agency newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agency[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agency|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agency saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agency[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agency findOrCreate($search, callable $callback = null, $options = [])
 */
class AgencyTable extends Table
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

        $this->setTable('agency');
        $this->setDisplayField('AGENCY_ID');
        $this->setPrimaryKey('AGENCY_ID');
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
            ->integer('AGENCY_ID')
            ->allowEmptyString('AGENCY_ID', 'create');

        $validator
            ->scalar('NAME')
            ->maxLength('NAME', 255)
            ->allowEmptyString('NAME');

        $validator
            ->scalar('LOCATION')
            ->maxLength('LOCATION', 600)
            ->allowEmptyString('LOCATION');

        $validator
            ->scalar('CITY')
            ->maxLength('CITY', 255)
            ->allowEmptyString('CITY');

        return $validator;
    }
}

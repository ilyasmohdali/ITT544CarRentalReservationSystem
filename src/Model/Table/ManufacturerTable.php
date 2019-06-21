<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Manufacturer Model
 *
 * @method \App\Model\Entity\Manufacturer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Manufacturer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Manufacturer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Manufacturer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Manufacturer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Manufacturer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Manufacturer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Manufacturer findOrCreate($search, callable $callback = null, $options = [])
 */
class ManufacturerTable extends Table
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

        $this->setTable('manufacturer');
        $this->setDisplayField('MADE_BY');
        $this->setPrimaryKey('MADE_BY');
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
            ->integer('MADE_BY')
            ->allowEmptyString('MADE_BY', 'create');

        $validator
            ->scalar('NAME')
            ->maxLength('NAME', 255)
            ->allowEmptyString('NAME');

        $validator
            ->scalar('HELPLINE')
            ->maxLength('HELPLINE', 12)
            ->allowEmptyString('HELPLINE');

        return $validator;
    }
}

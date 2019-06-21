<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Access Model
 *
 * @method \App\Model\Entity\Acces get($primaryKey, $options = [])
 * @method \App\Model\Entity\Acces newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Acces[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Acces|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Acces saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Acces patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Acces[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Acces findOrCreate($search, callable $callback = null, $options = [])
 */
class AccessTable extends Table
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

        $this->setTable('access');
        $this->setDisplayField('ACCESS_CODE');
        $this->setPrimaryKey('ACCESS_CODE');
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
            ->integer('ACCESS_CODE')
            ->allowEmptyString('ACCESS_CODE', 'create');

        $validator
            ->scalar('DESCRIPTION')
            ->maxLength('DESCRIPTION', 255)
            ->allowEmptyString('DESCRIPTION');

        return $validator;
    }
}

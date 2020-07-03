<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Distributor Model
 *
 * @method \App\Model\Entity\Distributor newEmptyEntity()
 * @method \App\Model\Entity\Distributor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Distributor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Distributor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Distributor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Distributor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Distributor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Distributor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Distributor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Distributor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Distributor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Distributor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Distributor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DistributorTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('distributor');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('direction')
            ->maxLength('direction', 255)
            ->requirePresence('direction', 'create')
            ->notEmptyString('direction');

        return $validator;
    }
}

<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kuotes Model
 *
 * @property \App\Model\Table\AuthorsTable&\Cake\ORM\Association\BelongsTo $Authors
 *
 * @method \App\Model\Entity\Kuote get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kuote newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kuote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kuote|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kuote saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kuote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kuote[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kuote findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KuotesTable extends Table
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

        $this->setTable('kuotes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Authors', [
            'foreignKey' => 'author_id',
            'joinType' => 'INNER',
        ]);
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
            ->scalar('kuote')
            ->requirePresence('kuote', 'create')
            ->notEmptyString('kuote');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        $validator
            ->dateTime('deleted_at')
            ->allowEmptyDateTime('deleted_at');

        $validator
            ->boolean('by_admin')
            ->allowEmptyString('by_admin');

        $validator
            ->scalar('photo')
            ->allowEmptyString('photo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['author_id'], 'Authors'));

        return $rules;
    }
}

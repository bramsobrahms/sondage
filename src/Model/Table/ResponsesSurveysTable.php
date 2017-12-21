<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ResponsesSurveys Model
 *
 * @property \App\Model\Table\ResponsesTable|\Cake\ORM\Association\BelongsTo $Responses
 * @property \App\Model\Table\SurveysTable|\Cake\ORM\Association\BelongsTo $Surveys
 *
 * @method \App\Model\Entity\ResponsesSurvey get($primaryKey, $options = [])
 * @method \App\Model\Entity\ResponsesSurvey newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ResponsesSurvey[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ResponsesSurvey|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResponsesSurvey patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ResponsesSurvey[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ResponsesSurvey findOrCreate($search, callable $callback = null, $options = [])
 */
class ResponsesSurveysTable extends Table
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

        $this->setTable('responses_surveys');
        $this->setDisplayField('response_id');
        $this->setPrimaryKey(['response_id', 'survey_id']);

        $this->belongsTo('Responses', [
            'foreignKey' => 'response_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Surveys', [
            'foreignKey' => 'survey_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['response_id'], 'Responses'));
        $rules->add($rules->existsIn(['survey_id'], 'Surveys'));

        return $rules;
    }
}

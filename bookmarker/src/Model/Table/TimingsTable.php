<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
//use App\Model\Event;
use cake\Event\Event;


/**
 * Timings Model
 *
 * @method \App\Model\Entity\Timing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Timing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Timing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Timing|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Timing saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Timing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Timing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Timing findOrCreate($search, callable $callback = null, $options = [])
 */
class TimingsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    
     // Creating the Observer pattern here 
    
    // End of the try number 2
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('timings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        
        // Writing for association
      //  $this->hasOne('Profiles');
    }
    
    
    /*
     $user = $this->Users->newEntity();
             if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been registered'));
                
    
    */
        /*public function next($event, $entity, $options) {
            
            $entity = $this
        if ($created) {

            $event = new Event('Model.Post.created', $this, $options);

            $this->eventManager()->dispatch($event);
        }
    }*/
    /*
    public function next($id)
    {
        if ($this->save($id)) {
            
            Log::write('debug','im here');
            //$this->Cart->remove($order);
            $event = new Event('Model.Timing.afterNext', $this, [
                'id' => $id
            ]);
            $this->eventManager()->dispatch($event);
            return true;
        }
        Log::write('debug','im here 2');

        return false;
    } 
*/
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('Date')
            ->maxLength('Date', 255)
            ->requirePresence('Date', 'create')
            ->notEmptyString('Date');

        $validator
            ->time('Start_time')
            ->requirePresence('Start_time', 'create')
            ->notEmptyTime('Start_time');

        $validator
            ->time('End_time')
            ->requirePresence('End_time', 'create')
            ->notEmptyTime('End_time');
        
        // Added for payment page
        // #####################################################################################################
         $validator
            ->scalar('CardNumber')
            ->maxLength('CardNumber', 255)
            ->requirePresence('CardNumber', 'create')
            ->notEmptyString('CardNumber');

        $validator
            ->scalar('CardType')
            ->maxLength('CardType', 255)
            ->requirePresence('CardType', 'create')
            ->notEmptyString('CardType');


        $validator
            ->scalar('ExpDate')
            ->maxLength('ExpDate', 255)
            ->requirePresence('ExpDate', 'create')
            ->notEmptyString('ExpDate');
        
        
        // #####################################################################################################

        return $validator;
    }
}

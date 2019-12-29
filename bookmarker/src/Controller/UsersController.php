<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Log\Log;
use Cake\Datasource\ConnectionManager;

//use Cake\View\Helper\HtmlHelper::docType(string $type = 'html5')

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
    class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        //$uid = $this->Auth->User('user_id');
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                           // Log::write('debug', ' csdbicdbsci dbsciusdbid account.');

                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            
              // ##################################################### 
           $event = new Event('Model.Users.afterRemove', $this, ['user_id' => $user]); 
            $this->eventManager()->dispatch($event); 
           // Log::write('debug', ' csdbicdbsci dbsciusdbid account.');
            // #####################################################
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    //Login Controller
    
    public function login()
    {
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user) {
                  $this->Auth->setUser($user);
                return $this->redirect(['controller'=>'Users','action'=>'home']);
                
            }
        
            // Login failues
             $this->Flash->error('Login Failed');
        }
        
        
        
        }
        
    
        // Logout
         public function logout () {
             
             $this->Flash->success('Logged Out');
             return $this->redirect($this->Auth->logout());

}
    
  
    
    
        public function register()
        {
            $user = $this->Users->newEntity();
             if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                
                 // #####################################################
               $event = new Event('Model.Users.afterRegister', $this, ['user_id' => $user]);
               $this->eventManager()->dispatch($event);
                // #####################################################
                $this->Flash->success(__('The user has been registered'));
                
        //OBSERVER
              // $event = new Event('Controller.User.afterRegister');
                //$this->getEventManager()->dispatch($event);

        //OBSERVER

                return $this->redirect(['action' => 'login']);
            } else {

                 
            $this->Flash->error(__('The user could not be registered. Please, try again.'));
            }
        }
            
                    $this->set(compact('user'));
                    $this->set('_serialize', ['user']);

            
        }
    
    public function home(){
}
    
    public function bookslot() {
}
    
    public function mydetails(){
        

}
    
    public function timings() {
        
}
 
       public function beforeFilter(Event $event)
       {
           $this->Auth->allow(['register']);
           
        }
}

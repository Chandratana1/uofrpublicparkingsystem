<?php

namespace App\Event;
use Cake\Event\EventListenerInterface;
use Cake\Event\EventListener;
use Cake\Mailer\Email;
use Cake\Http\Client;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;
use Cake\Email\TransportFactory;
use Cake\Log\Log;

class UserListener implements EventListenerInterface
{
    public function implementedEvents()
    {
        return [
            'Model.Users.afterRegister' => 'afterRegister',
            'Model.Users.afterRemove' => 'afterRemove',
        ];
    }

    public function afterRegister($event, $user)
    {
        $email = new Email('default');
        $email
             // ->template('new_user')
              //->emailFormat('html')
              ->from(['projectpurpose2635@gmail.com' => 'UofR Public Parking System'])
              ->to('projectpurpose2635@gmail.com')
              ->setSubject('New User Registration - ' . $user['email'])
              //->setViewVars
              ->send('User with USER ID:  '.$user['user_id']. 
                      '  and USER NAME: '.$user['name']. ' has registered');

    }

     

    public function afterRemove($event, $user)
    {
        Log::write('debug', $user['user_id'] . ' has deleted his/her account.');
  }
}






/*
class UserListener implements EventListenerInterface {
    
    public function implementedEvents() {
        // TODO
            return ['Controller.User.afterRegister' => 'sendConfirmationEmail'];
            Log::write("im Here");
        
    }
    // $this->Table = TableRegistry::get('Table');
   

// Sample SMTP configuration.

    public function sendConfirmationEmail(Event $Event) {
        // TODO
   // $this->User = TableRegistry::get('User');
     
    $Email = new Email('gmail');
 $Email->from(array(
        'projectpurpose2635@gmail.com' => 'Your Site'
    ));    
    
    $Email->to($Event->data['data']['email']);
    $Email->subject('Your account has been created');
    $Email->emailFormat('html');
    $Email->template('new_user');
    $Email->viewVars(array(
        'data' => $Event->data['data']
    ));
    $Email->send();

    return;
    
      
}
    
    
}

*/




?>
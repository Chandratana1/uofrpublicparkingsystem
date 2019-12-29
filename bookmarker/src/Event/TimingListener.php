<?php
namespace App\Event;

use Cake\Log\Log;
use Cake\Event\EventListenerInterface;
//use Cake\Event\EventListener;
//use Cake\ORM\Table;


class TimingListener implements EventListenerInterface {

    
    public function implementedEvents() {
        
        return array(
            
            'Model.Timings.afterCancel' => 'afterCancel',
        );
    }
 
    public function afterCancel ($event, $timing)
    {

    Log::write('debug', 'User has Cancelled the booking with timing ID: '.$timing['id'] );

}
  
    
}

<?php
use Cake\ORM\TableRegistry;
use App\Event\UserListener;
use Cake\Event\EventManager;

$User = TableRegistry::get('User');
//EventManager::instance()->on(new UserListener());

$User->getEventManager()->on(new UserListener());


?>
<?php
use Cake\Datasource\ConnectionManager;
 
?>

<!--<h1>Working on this page</h1>-->


<?php

//require __DIR__ . '/vendor/autoload.php';

use Cake\Database\Connection;
use Cake\Database\Driver\Mysql;
    
$driver = new Mysql([
    'database' => 'project',
    'username' => 'root',
    'password' => '',
]);

$conn = new Connection([
    'driver' => $driver,
]);

$stm = $conn->execute('SELECT * FROM profiles ');
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <h4><?= $this->Html->link(__('Click Here to Add New Profile'), ['controller' => 'profiles','action' => 'add']) ?></h4>
    </ul>
</nav>
<div  class="profiles form large-9 medium-8 columns content">
<?php
while ($row = $stm->fetch('assoc')) {
    
?>


<table class="vertical-table">
        <tr>
            <th scope="row"><?= __('LicenseNumber') ?></th>
            <td><?= $row['LicenseNumber']; ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('VehicleNumber') ?></th>
            <td><?= $row['VehicleNumber']; ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('LastName') ?></th>
            <td><?= $row['LastName']; ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('FirstName') ?></th>
            <td><?= $row['FirstName']; ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= $row['created']; ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= $row['modified']; ?></td>
        </tr>

</table>
    



    
    <?php 
  //  echo "{$row['id']} {$row['LicenseNumber']}  {$row['LastName']}\n";
}
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Timing $timing
 */
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Show the Bookings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="timings form large-9 medium-8 columns content">
    <?= $this->Form->create($timing) ?>
    <fieldset>
        <legend><?= __('Book The Slot') ?></legend>
        <?php
            echo $this->Form->control('Date',['class'=>'datepicker']);
            echo $this->Form->control('Start_time',['id'=>'timepicker1','class'=>'timepicker1']);
            echo $this->Form->control('End_time',['id'=>'timepicker2','class'=>'timepicker2']);
            // Adding need to build controllers
            //#####################################
            echo 'Card Type';   
            $cards = ['credit' => 'Credit', 'debit' => 'Debit'];
            echo $this->Form->select('CardType', $cards, ['default' => 'credit']);
            echo $this->Form->control('CardNumber',['maxlength'=>16,'minlength'=>16, 'pattern' =>'[0-9]*']);
            echo $this->Form->control('ExpDate',['class'=>'datepicker2']);
            
            
            // Adding need to build controllers
            //echo $this->Form->control('CVV');
            
            //###################################
            

        ?>
    </fieldset>
         <!--   <//?= $this->Html->link(__('Confirm the Slot'), ['class'=>'btnNext','action' => 'finalpage']) ?>-->

            <?= $this->Form->button(__('Confirm The Slot'),['id' => 'btnNext']) ?>
    <?= $this->Form->end() ?>
</div>
<script>
  $( function() {
      //var todayDate = new Date();
    $( ".datepicker" ).datepicker({  minDate: 0, maxDate: "+7D"});
  } );
    
 $( function() {
      //var todayDate = new Date();
    $( ".datepicker2" ).datepicker({dateFormat: 'm/y', showButtonPanel:true, changeMonth:true, changeYear:true}).focus(function() {
        var thisCalendar = $(this);
        $('.ui-datepicker-calendar').detach();
        $('.ui-datepicker-close').click(function() {
var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
thisCalendar.datepicker('setDate', new Date(year, month, 1));
        });
    });
  } );
</script>

<script>
$(function() {
$('.timepicker1').timepicker({
    //timeFormat: 'h:mm p',
    timeFormat: 'h:mm p',
    
    interval: 60,
    minTime: '7:00Am',
    maxTime: '5:00pm',
    defaultTime: '7:00Am',
    startTime: '7:00AM', 
 /*   minTime: '7:00',
    maxTime: '17:00',
    //defaultTime: '7:00',
    startTime: '7:00',    */
    dynamic: true,
    dropdown: true,
    scrollbar: true
});
});
</script>

<script>
$(function() {
$('.timepicker2').timepicker({
    timeFormat: 'h:mm p',
    //timeFormat: 'h:mm p',    
    interval: 60,
 /*   minTime: '8:00',
    maxTime: '18:00',
    defaultTime: '8:00',
    startTime: '8:00',  */
    minTime: '8:00Am',
    maxTime: '6:00pm',
    defaultTime: '8:00Am',
    startTime: '8:00AM',     
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
});
</script>
<script>
$('#btnNext').on('click', function () {
           
            var startTime = $('#timepicker1').val();
            var endTime = $('#timepicker2').val();
           
            var st = MinfromMidnight(startTime);
            var et = MinfromMidnight(endTime);
            if (st > et) {
                alert('End_Time greater then Start_Time.');
                return false;
            }
           if (st == et) {
                alert('End_Time is matching Start_Time.');
                return false;
             }
            

            function MinfromMidnight(tm) {
                var ampm = tm.substr(-2);
                var clk;
                if (tm.length <= 6) {
                    clk = tm.substr(0, 5);
                } else {
                    clk = tm.substr(0, 4);
                }
                var m = parseInt(clk.match(/\d+$/)[0], 10);
                var h = parseInt(clk.match(/^\d+/)[0], 10);
                h += (ampm.match(/pm/i)) ? 12 : 0;
                return h * 60 + m;
            }
        });

</script>

<?php  use Cake\View\Helper\HtmlHelper ?>

    
<html>
<head>
    <title></title>
    <style>
/*#bg-image 
{
   background-image:url("../Images/parking.jpg");
   background-repeat:no-repeat;
   background-size:cover;

} */
    
#homePage_header{
 
    font-family: impact;
    color: whitesmoke;
    
    font-size: 75px;
    position: absolute;
    top:125px;
    left:250px;
}
        

        
</style>
</head>
</html>
<body>
      <?php  
echo $this->Html->image('parking.jpg', ['alt' => 'Parking Image']);
?>
<h1 id="homePage_header"> UofR PUBLIC PARKING SYSTEM  <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME <br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php echo $this->request->session()->read('Auth.User.name'); ?></h1>

    
    
    
</body>    



<script>


</script>
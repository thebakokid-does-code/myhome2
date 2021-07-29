<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<h1>welcome to my house</h1>'; ?> 
    
    <?php
include 'calander.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
  </body>
</html>

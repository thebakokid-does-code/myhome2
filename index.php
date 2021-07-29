<html>
  <head>
    <title>PHP Test</title>
    <link href="calender.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php echo '<h1>welcome to my house</h1>'; ?> 
    
    <?php
include 'calander.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>

  <?php echo '<a href="/bio.php">Bio</a>'; ?>
  
  </body>
</html>

<html>
  <head><title>Hi!</title></head>
  <body>
    <?php 
    $name = 'Sarah';
    $age = 39;
    $eyes = 'brun';
    $family = array(
        0 => 'Spike',
        1 => 'Dexter',
        2 => 'Ezio',
        3 => 'Néo');
    ?>
  <p>Hi! My name is <?php echo $name ?> </p>
  <p>I am <?php echo $age ?>  years old.</p>
  <p>My eyes are <?php echo $eyes ?></p>
  <p>The first person in my family is <?php echo $family[0] ?></p>
    
  </body>
</html>
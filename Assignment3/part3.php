<!DOCTYPE html>
<html>
  <head>
    <title>Part 3 | Months</title>
  </head>

  <body>
    <?php
      $month = array('January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December');

      function sortFor($x) {
        sort($x);
        for($i = 0; $i < 12; $i++) {
          echo $x[$i]." ";
        }
      }

      for($i = 0; $i < 12; $i++) {
        echo $month[$i]." ";
      }
      echo "<br />";
      sortFor($month);
      echo "<br /><br />";

      // FOREACH LOOPS
      foreach($month as $value) {
        echo $value." ";
      }
      echo "<br />";
      sort($month);
      foreach($month as $value) {
        echo $value." ";
      }
    ?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>Part 1 | Charlie ate my lunch!</title>
  </head>

  <body>
    <?php
    function isBitten() {
      $random = rand(0, 100);
      if ($random <= 50) {
        return true;
      } else {
        return false;
      }
    }

    $x = isBitten();
    if ($x == true) {
      echo "Charlie ate my lunch!";
    } else {
      echo "Charlie did not eat my lunch!";
    }
    ?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>Part 4 | Top 10 Restaurants in Atlanta</title>
    <style>
    td {
      text-align: center;
    }
    </style>
  </head>

  <body>
      <?php
        $restaurants = array("Chama Gaucha" => '40.50', "Aviva by Kameel" => '15.00',
          "Bone's Restaurant" => '65.00', "Umi Sushi Buckhead" => '40.50',
          "Fandangles" => '30.00', "Capital Grille" => '60.50', "Canoe" => '35.50',
          "One Flew South" => '21.00', "Fox Bros. BBQ" => '15.00',
          "South City Kitchen Midtown" => '29.00');

        // PRINT THE ARRAY INTO A TABLE
        echo "<table><thead><tr><td>Name</td><td>Average Cost</td></tr></thead><tbody>";
        foreach($restaurants as $key => $value) {
          echo "<tr><td>".$key."</td><td>$".$value."</td></tr>";
        }
        echo "</tbody></table><br />";

        // SORT THE ARRAY BY THE AVERAGE PRICE
        function sortPrice($x) {
          asort($x);
          foreach($x as $key => $value) {
            echo "<tr><td>".$key."</td><td>$".$value."</td></tr>";
          }
        }

        // SORT THE ARRAY BY THE RESTAURANT NAME
        function sortName($x) {
          ksort($x);
          foreach($x as $key => $value) {
            echo "<tr><td>".$key."</td><td>$".$value."</td></tr>";
          }
        }

        echo "<table><thead><tr><td>Name</td><td>Average Cost</td></tr></thead><tbody>";
        sortPrice($restaurants);
        echo "</tbody></table><br />";

        echo "<table><thead><tr><td>Name</td><td>Average Cost</td></tr></thead><tbody>";
        sortName($restaurants);
        echo "</tbody></table><br />";
      ?>
  </body>
</html>

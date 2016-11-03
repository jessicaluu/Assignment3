<!DOCTYPE html>
<html>
  <head>
    <title>Part2 | Checkerboard</title>
    <style>
      table {
        width: 300px;
        border: 1px;
        cellpadding: 1px;
        cellspacing: 1px;
      }
      td {
        width: 35px;
        height: 35px;
      }
    </style>
  </head>

  <body>
    <table>
      <?php
      for ($rows = 0; $rows < 8; $rows++) {
        echo "<tr>";
        for ($cols = 0; $cols < 8; $cols++) {
          if (($rows % 2) == ($cols % 2)) {
            echo "<td bgcolor=black></td>";
          } else {
            echo "<td bgcolor=red></td>";
          }
        }
        echo "</tr>";
      }
      ?>
    </table>
  </body>
</html>

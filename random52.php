<html>
<head><title></title>
<meta charset="utf-8">
</head>
<body>

  <?php
        $A = array();
        echo "<form>";
        echo "<table border='0' align='center' width='500'>";
        for ($i2=0; $i2 <13; $i2++)
        {
        echo"<tr>";
          for ($i=1; $i <= 4; $i++)
          {
            $B = mt_rand(1,52);
            while (true) {
              if (!isset($A[$B])) {
                $A[$B] = $B;
                break;
              }
              else {
                $B = mt_rand(1,52);
              }
            }
            echo      "<td align='center' >";
            echo $A[$B];
            echo      "</td>";
          }
        echo      "<tr>";
        }
        echo      "</table>";
        echo      "</form>";




   ?>
</body>
</html>

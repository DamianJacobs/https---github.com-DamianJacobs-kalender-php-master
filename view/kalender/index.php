
      <?php

             $month = "";
             $day = "";
      foreach ($Birthdays as $row) {
              if ($month != date('F', mktime( 0, 0, 0, $row['month'], 10))) {
                 $month = date('F', mktime( 0, 0, 0, $row['month'], 10));
                 $day = "";
                 echo "<h1>" . $month. "</h1>";


             }
             if ($day != $row["day"]) {
                 $day = $row["day"];
                 echo "<h2>" . $row["day"] . "</h2>";
             }

              printf("<p><a href='%sBirthday/edit/%s' >%s (%s)</a><a href='%sBirthday/delete/%s'>x</a></p>",
               URL, $row["id"], $row["Name"], $row["year"], URL, $row["id"]);

          }
      ?>


         <p><a href= "<?= URL ?>Birthday/create">+ Toevoegen</a></p>

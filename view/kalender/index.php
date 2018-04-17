
      <?php
      foreach ($Birthdays as $row) {

             $month = "";
             $day = "";

              if ($month != date('F', mktime( 0, 0, 0, $row['month']))) {
                 $month = date('F', mktime( 0, 0, 0, $row['month']));
                 echo "<h1>" . $month. "</h1>";
                 $day = "";

             }
             if ($day != $row["day"]) {
                 $day = $row["day"];
                 echo "<h2>" . $row["day"] . "</h2>";
             }

              printf("<p><a href='%sBirthday/edit/%s' >%s (%s)</a><a href='%skalender/delete/%s'>x</a></p>",
               URL, $row["id"], $row["Name"], $row["year"], URL, $row["id"]);

          }
      ?>


         <p><a href= "<?= URL ?>Birthday/create">+ Toevoegen</a></p>

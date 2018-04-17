<?php
// require_once('core/connection');

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Toevoegen verjaardag</title>
  </head>
  <body>
   <form action="createBirthday" method="post">
     <input type="text" name="Name" required="" placeholder="naam">
     <input type="number" min="1" max="31" name="dag" required="" placeholder="dag">
     <input type="number" min="1" max="12" name="maand" required="" placeholder="maand">
     <input type="number" min="1900" name="jaar" required="" placeholder="jaar">
    <input type="submit" name="toevoegen">
   </form>
  </body>
</html>

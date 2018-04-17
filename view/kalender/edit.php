

<html>
<head>
    <title>verjaardag bewerken</title>
</head>
<body>
    <form action="<?= URL ?>Birthday/editBirthday" method="post">
  <input type="text" value="<?php echo $birthday['Name']; ?>" name="Name" required="" placeholder="naam">
  <input type="number" min="1" max="31"  value="<?php echo $birthday['day']; ?>" name="dag" required="" placeholder="dag">
  <input type="number" min="1" max="12" value="<?php echo $birthday['month']; ?>" name="maand" required="" placeholder="maand">
  <input type="number" min="1900" value="<?php echo $birthday['year']; ?>" name="jaar" required="" placeholder="jaar">
  <input type="hidden" name="id" value="<?php echo $birthday['id']; ?>">
 <input type="submit" name="toevoegen">
    </form>


</body>
</html>

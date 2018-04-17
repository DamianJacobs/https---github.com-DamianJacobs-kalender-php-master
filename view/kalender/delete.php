<?php
 $id = $_GET['id'];
 $sql = "DELETE FROM birthdays WHERE id ='$id'";
   header('location:' .  URL . 'Home/index');

 if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>
<head>
  <meta charset="utf-8">
  <title>Verwijder verjaardag</title>
</head>

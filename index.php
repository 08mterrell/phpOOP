<!DOCTYPE html>
<html>
<head>
  <?php include 'includes/newclass.inc.php'; ?>
    <title></title>
</head>
<body>
  <?php
  $person1 = new Person("Matt", 12, 30, 100);
  $person2 = new Person("Jack", 20, 30, 100);
  echo $person1->name;
  echo "<br />" . $person2->name;
  ?>
</body>
</html>

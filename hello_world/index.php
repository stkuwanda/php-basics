<?php
$is_student = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <?php
  echo "Hello, World! <br>";
  echo ' This is a simple PHP web page. <br>';
  echo 'Concatenation: ' . 'Hello' . ', ' . 'World' . '!' . '<br>';
  ?> -->
  <!--Output PHP in HTML-->
  <h1>Hello, <?= " World!" ?></h1>
  <h2>Hi, <?php echo " Simba!" ?></h2>
  <p>Today's date is <?= date('m-d-Y') ?></p>
  <?php if ($is_student) {
    echo "<p>You are a student.</p>";
  } else {
    echo "<p>You are not a student.</p>";
  } ?>
</body>

</html>
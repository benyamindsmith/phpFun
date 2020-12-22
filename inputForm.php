<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <form action="site.php" method="get">
      Name: <input type= "text" name="name">
      <br>
      <input type="submit">
    </form>

    <?php
    echo "Hello". " ". $_GET["name"]."!" ;
    ?>
  </head>
  <body>

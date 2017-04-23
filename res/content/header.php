<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="res/css/bootstrap.min.css" rel="stylesheet">
    <link href="res/css/tempfiles.min.css" rel="stylesheet" title="bright">
    <link href="res/css/tempfiles-dark.min.css" rel="alternate stylesheet" title="dark">
    <?php
    if (isset($_POST['css'])) {
      echo "<link href=\"" . $_POST['css'] . "\" rel=\"stylesheet\">\n";
    }
    ?>
    <script src="res/js/jquery.js"></script>
    <script src="res/js/bootstrap.min.js"></script>
    <script src="res/js/night-mode.min.js"></script>
    <title>TempFiles</title>
  </head>

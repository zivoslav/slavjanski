<?php
$skript = array_shift($argv);
$debug = in_array('--debug', $argv);
$typescript = in_array('--typescript', $argv);
// var_dump($argv);
?>

<html>
  <head>
    <meta charset="UTF-8">
  <title><?php echo $title ? $title : 'Пруга: nový web'; ?></title>
  </head>
  <body>
    <div id="elm-app"></div>
  </body>
  <script src="./scripts/app.js"></script>
  <script type="text/javascript">
      var elmDiv = document.getElementById('elm-app');
      Elm.Main.embed(elmDiv);
  </script>

  <?php
    if ($typescript) {
      ?>
      
  <script src="./scripts/index.js"></script>
  <?php
  }
  ?>


  
  <?php
    if ($debug) {
      ?>
      
  <script src="http://localhost:35729/livereload.js?snipver=1"></script>
  <?php
  }
  ?>
</html>

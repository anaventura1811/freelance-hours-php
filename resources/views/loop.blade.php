<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <script src="" async defer></script>

    <?php echo 'Oi, estou aprendendo php'; ?>
    <?php foreach(range(1,20) as $key):?>
    <li>
      <?php echo $key; ?>
    </li>
    
    <?php endforeach; ?>

  </body>
</html>

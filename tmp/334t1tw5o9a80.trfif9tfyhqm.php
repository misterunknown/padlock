<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Titel</title>

    <!-- Icon -->
    <link rel="icon" type="image/png" href=""> 

    <!-- Css -->
    <link href="<?php echo $BASE; ?>public/ui/css/style.css" type="text/css" rel="stylesheet">
        
</head>
<body>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="<?php echo $BASE; ?>public" class="navbar-brand"><?php echo $BRAND; ?></a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo $BASE; ?>public">Home</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo $BASE; ?>public/login">Anmelden</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
  </div>

  <script src="<?php echo $BASE; ?>public/ui/js/bootstrap.js"></script>
  <script src="<?php echo $BASE; ?>public/ui/js/jquery.js"></script>

</body>
</html>

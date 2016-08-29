
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fika Ridaul Maulayya">
    <link rel="icon" href="favicon.ico">
    <title>SKRIPSI - Teknologi Informasi UNWAHA</title>
    <link href="<?php echo $config['base_url'] ?>assets/fonts/fonts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo $config['base_url'] ?>assets/css/font-awesome/css/font-awesome.css">
    <link href="<?php echo $config['base_url'] ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $config['base_url'] ?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="<?php echo $config['base_url'] ?>assets/css/jumbotron.css" rel="stylesheet">
    <script src="<?php echo $config['base_url'] ?>assets/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #16a085;border-color: #16a085;color: #fff;font-family: 'Lato'; font-weight:bold;font-size:18px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $config['base_url'] ?>" style="color:#fff;font-family: 'Lato'; font-weight:bold;font-size:18px"><i class="fa fa-home"></i> Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php?action=semua-judul" style="color:#fff"><i class="fa fa-folder-open-o"></i> Semua Judul</a></li>
              <li><a href="index.php?action=teknik-informatika" style="color:#fff"><i class="fa fa-folder-open-o"></i> Teknik Informatika</a></li>
              <li><a href="index.php?action=sistem-informasi" style="color:#fff"><i class="fa fa-folder-open-o"></i> Sistem Informasi</a></li>
              <li><a href="index.php?action=statistik" style="color:#fff"><i class="fa fa-pie-chart"></i> Statistik</a></li>
            </ul>
        </div>
      </div>
    </nav>
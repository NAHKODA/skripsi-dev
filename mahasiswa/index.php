<?php include('../library/config.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Fika Ridaul Maulayya">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Login &rsaquo; Mahasiswa</title>
    <link href="<?php echo $config['base_url'] ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo $config['base_url'] ?>assets/css/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo $config['base_url'] ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $config['base_url'] ?>assets/css/style-responsive.css" rel="stylesheet">
  </head>
  <body>
      <div id="login-page">
        <div class="container">
              
              <form class="form-login" action="auth.php" method="POST" style="margin-top:120px">
                <h2 class="form-login-heading"><img src="../assets/img/logo-unwaha.png" style="width;150px ;height:150px"></h2>
                <div class="login-wrap">
                    <?php if(isset($error)) { echo $error; } ?>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <label class="checkbox">
                        <span class="pull-right" style="margin-bottom:5px">
                            <a data-toggle="modal" href="#InfoLogin"><i class="fa fa-info-circle"></i> Info Masuk</a>
        
                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Checking..." type="submit"><i class="fa fa-lock"></i> Masuk</button>
        
                </div>
        
              </form>       
        
        </div>
      <div id="InfoLogin" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #16a085;">
              <h4 class="modal-title"><i class="fa fa-info-circle"></i> Informasi Account Login</h4>
            </div>
            <div class="modal-body">
              <p>untuk masuk ke panel system, silahkan menggunakan account dari siakad - Sistem Informasi Akademik.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
          </div>

        </div>
      </div>        
      </div>     
    <script src="<?php echo $config['base_url'] ?>assets/js/jquery.js"></script>
    <script src="<?php echo $config['base_url'] ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo $config['base_url'] ?>assets/img/bg.jpg", {speed: 500});
        $('.btn').on('click', function() {
            var $this = $(this);
                $this.button('loading');
                setTimeout(function() {
                  $this.button('reset');
                }, 8000);
        });        
    </script>
  </body>
</html>        
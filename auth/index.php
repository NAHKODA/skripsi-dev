<?php 
error_reporting(0);
session_start();
if (!empty($_SESSION['username'] && $_SESSION['password'])) {
  header('location:media.php');
}

/* start get config */
  include('library/config.php');
/* end get config */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Fika Ridaul Maulayya">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Login &rsaquo; Skripsi UNWAHA - Universitas KH. A. Wahab Hasbullah.</title>
    <link href="<?php echo $config['base_url'] ?>../assets/media/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $config['base_url'] ?>../assets/media/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo $config['base_url'] ?>../assets/media/css/style.css" rel="stylesheet">
    <link href="<?php echo $config['base_url'] ?>../assets/media/css/style-responsive.css" rel="stylesheet">
  </head>
  <body>
      <div id="login-page">
        <div class="container">
              
              <form class="form-login" action="auth.php" method="POST" style="margin-top:200px">
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                <?php echo $error; ?>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
        
                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
        
                </div>
        
              </form>       
        
        </div>
      </div>
    <script src="<?php echo $config['base_url'] ?>../assets/media/js/jquery.js"></script>
    <script src="<?php echo $config['base_url'] ?>../assets/media/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $config['base_url'] ?>../assets/media/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo $config['base_url'] ?>../assets/media/img/bg.jpg", {speed: 500});
    </script>
  </body>
</html>
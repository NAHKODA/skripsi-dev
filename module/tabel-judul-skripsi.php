    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-image: url('<?php echo $config['base_url'] ?>assets/img/bg.png'); position:relative;background-color:#1abc9c">
      <div class="container" style="color:#fff">
        <div class="col-md-5"> 
          <ol class="breadcrumb" style="margin-top:15px">
            <li><a href="#">Home</a></li>
            <li><a href="#">Judul Skripsi</a></li>
            <li class="active"><?php echo $breadcrumb ?></li>
          </ol>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading" style="color: #fff;background-color: #16a085;border-color:#16a085;font-family: 'ubuntu'; font-weight:bold;font-size:35px">
              <h3 class="panel-title"><?php echo $breadcrumb ?></h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>         
        </div>
      </div>

      <hr>
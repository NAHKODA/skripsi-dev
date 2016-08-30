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
              <div class="table-responsive">               
                  <table id="data-alumni" class="table table-bordered">
                      <thead>
                          <tr>
                              <th class="text-center" width="5%">No.</th>
                              <th class="text-center" width="25%">Nama Mahasiswa</th>
                              <th class="text-center" width="25%">Judul Skripsi </th>
                              <th class="text-center" width="15%">Pembimbing</th>
                              <th class="text-center" width="15%">Kelas</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          //include config
                          include('./library/config.php');
                          //include environment 
                          include('./library/environment.php');
                          //include koneksi database   
                          include('./library/database.php');
                          //get dosen
                          $dosen = print_r($pembimbing);
                          echo '<br>';
                          $kelas = print_r($kelas);
                          //query table
                          $query  = "SELECT *  FROM skripsi";
                          $no     = 1;
                          $result =  mysqli_query($connect, $query);
                          while ($row = mysqli_fetch_array($result)) {
                          
                          $nim         = $row['nim'];
                          $nama        = $row['mahasiswa'];
                          $judul1      = $row['judul1'];
                          $judul2      = $row['judul2'];
                          $pembimbing1 = $row['pembimbing1'];
                          $pembimbing2 = $row['pembimbing2'];
                          $kelas       = $row['kelas'];

                          ?>
                
                          <tr align='left'>
                              <td class="text-center"><?php echo  $no;?></td>
                              <td>
                                  <?php echo  $nama ?>
                              </td>
                              <td>
                                  <?php echo  $judul1 ?>
                              </td>
                              <td>
                                  <?php echo  $pembimbing1 ?>
                              </td>
                              <td>
                                  <?php echo  $kelas ?>
                              </td>
                          </tr>
                          <tr align='left'>
                              <td class="text-center"></td>
                              <td>NIM :<br>
                                  <?php echo  $nim ?>
                              </td>
                              <td>
                                  <?php echo  $judul2 ?>
                              </td>
                              <td>
                                  <?php echo  $pembimbing2 ?>
                              </td>
                              <td>
                                  <?php echo  $kelas ?>
                              </td>
                          </tr>                          
                          <?php
                          $no++;
                          }
                          ?>
                      </tbody>
                  </table> 
                  </div>
            </div>
          </div>         
        </div>
      </div>

      <hr>
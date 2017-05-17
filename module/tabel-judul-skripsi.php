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
        <div class="panel-heading" style="color: #fff;background-color: #0f8870;border-color:#0f8870;font-family: 'ubuntu'; font-weight:bold;font-size:35px">
          <h3 class="panel-title"><?php echo $breadcrumb ?></h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table id="" class="table table-bordered table-striped table-hover" style="font-family:'ubuntu'">
              <thead>
                <tr>
                  <th class="text-center" width="5%">No.</th>
                  <th class="text-center" width="22%">Nama Mahasiswa</th>
                  <th class="text-center" width="30%">Judul Skripsi </th>
                  <th class="text-center" width="15%">Status judul </th>
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
                //$dosen = print_r($pembimbing);
                echo '<br>';
                //$kelas = print_r($kelas);
                //query table
                $query  = "SELECT *  FROM skripsi";
                $no     = 1;
                $result =  mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {

                  $nim         = $row['nim'];
                  $nama        = $row['mahasiswa'];
                  $judul1      = $row['judul1'];
                  $judul2      = $row['judul2'];
                  $status1     = $row['status_judul1'];
                  $status2     = $row['status_judul2'];

                  if($status1 == '0')
                  {
                    $button1 = '<div class="alert alert-warning" style="font-family:"ubuntu">
                      Belum Dikoreksi
                    </div>';

                  }elseif($status1 == '1'){
                    $button1 = '<div class="alert alert-success" style="font-family:"ubuntu">
                      Judul Diterima
                    </div>';
                  }elseif($status1 == '2'){
                    $button1 = '<div class="alert alert-danger" style="font-family:"ubuntu">
                      Judul Ditolak
                    </div>';
                  }else{
                    $button1 = '<div class="alert alert-warning" style="font-family:"ubuntu">
                      Status Tidak Diketahui
                    </div>';
                  }
                  //status judul 2
                  if($status2 == '0')
                  {
                    $button2 = '<div class="alert alert-warning" style="font-family:"ubuntu">
                      Belum Dikoreksi
                    </div>';

                  }elseif($status2 == '1'){
                    $button2 = '<div class="alert alert-success" style="font-family:"ubuntu">
                      Judul Diterima
                    </div>';
                  }elseif($status2 == '2'){
                    $button2 = '<div class="alert alert-danger" style="font-family:"ubuntu">
                      Judul Ditolak
                    </div>';
                  }else{
                    $button2 = '<div class="alert alert-warning" style="font-family:"ubuntu">
                      Status Tidak Diketahui
                    </div>';
                  }

                  ?>

                  <tr align='left'>
                    <td class="text-center"><?php echo  $no;?></td>
                    <td>
                      <?php echo  $nama ?>
                    </td>
                    <td>
                      <?php echo  $judul1 ?>
                    </td>
                    <td class="text-center">
                      <?php echo $button1 ?>
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
                    <td class="text-center">
                      <?php echo $button2 ?>
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

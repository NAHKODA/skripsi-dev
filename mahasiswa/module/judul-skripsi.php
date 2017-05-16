<?php
  //error_reporting('0');
  //include config
  include_once('../library/config.php');
  //include environmrnt
  include('../library/environment.php');
  //var data nim
  $var = $_SESSION['nim'];
  //Data mentah yang ditampilkan ke tabel
  include ('../library/database.php');
  $query  = "SELECT * FROM skripsi WHERE nim = '$var'";
  $result =  mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($result)) {

      $nim         = $row['nim'];
      $nama        = $row['mahasiswa'];
      $judul1      = $row['judul1'];
      $description1= $row['desjudul1'];
      $judul2      = $row['judul2'];
      $description2= $row['desjudul2'];
      $pembimbing1 = $row['pembimbing1'];
      $pembimbing2 = $row['pembimbing2'];
      $kelas       = $row['kelas'];
      $status1     = $row['status_judul1'];
      $status2     = $row['status_judul2'];
    }

                            error_reporting('0');
                            //status judul 1
                            if($status1 == '0')
                            {
                              $button1 = '<div class="alert alert-info text-center" style="background-color: #0b6e84;margin-top:20px">
                                            Belum Dikoreksi
                                          </div>';

                            }elseif($status1 == '1'){
                              $button1 = '<div class="alert alert-info text-center" style="background-color: #0b841a;margin-top:20px">
                                            Judul Diterima
                                          </div>';
                            }elseif($status1 == '2'){
                              $button1 = '<div class="alert alert-info text-center" style="background-color: #840b0b;margin-top:20px">
                                            Judul Ditolak
                                          </div>';
                            }else{
                              $button1 = '<div class="alert alert-info text-center" style="background-color: #bb6f11;margin-top:20px">
                                            Status Tidak Diketahui
                                          </div>';
                            }
                            //status judul 2
                            if($status2 == '0')
                            {
                              $button2 = '<div class="alert alert-info text-center" style="background-color: #0b6e84;margin-top:20px">
                                            Belum Dikoreksi
                                          </div>';
                            }elseif($status2 == '1'){
                              $button2 = '<div class="alert alert-info text-center" style="background-color: #0b841a;margin-top:20px">
                                            Judul Diterima
                                          </div>';
                            }elseif($status2 == '2'){
                              $button2 = '<div class="alert alert-info text-center" style="background-color: #840b0b;margin-top:20px">
                                            Judul Ditolak
                                          </div>';
                            }else{
                              $button2 = '<div class="alert alert-info text-center" style="background-color: #bb6f11;margin-top:20px">
                                            Status Tidak Diketahui
                                          </div>';
                            }
    //var data
    $nim = $_SESSION['nim'];
    //query checking
    $query = "SELECT nim FROM skripsi WHERE nim = '$nim'";
    $result =  mysqli_query($connect, $query);
      while($row = mysqli_fetch_array($result)){
        $register = $row['nim'];
      }
?>
        <div class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <?php if(isset($register) =='') { ?>
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
              <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Detail Pengajuan Judul</div>
                <div class="panel-body">
                    <a href="media.php?action=ajukan-judul&token=<?php echo SHA1(MD5(SHA1(MD5($_SESSION['nim'])))) ?>" class="btn btn-success"><i class="pe-7s-note2"></i> Ajukan Judul Baru</a>
                </div>
              </div>
            <?php }else{ ?>
				    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
				      <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Detail Pengajuan Judul Skripsi</div>
				      <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th class="text-center" width="5%">Atrribute</th>
                                <th class="text-center" width="35%">Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>NIM</td>
                                <td><?php if(isset($nim)) { echo $nim; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                              <tr>
                                <td>Nama Mahasiswa</td>
                                <td><?php if(isset($nama)) { echo $nama; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                            </tbody>
                          </table>
                          </div>

                        <div class="alert alert-info" role="alert" style="font-family:'ubuntu';background-color:#158873">Judul Skipsi 1</div>
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped" style="font-family:'ubuntu'">
                            <thead>
                              <tr>
                                <th class="text-center" width="5%">Atrribute</th>
                                <th class="text-center" width="35%">Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Judul Skripsi</td>
                                <td><?php if(isset($judul1)) { echo $judul1; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                              <tr>
                                <td>Desciptions Judul</td>
                                <td><?php if(isset($description1)) { echo $description1; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                              <tr>
                                <td>Dosen Pembimbing</td>
                                <td><?php $i=0;
                                      foreach($kPembimbing1 as $pemb1){
                                        if($pembimbing1 == $i++)
                                          echo $pemb1;
                                        }
                                        ?>
                                </td>
                              </tr>
                              <tr>
                                <td>Status Judul </td>
                                <td><?php if(isset($button1)) { echo $button1; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                          <a href="media.php?action=edit-judul1&token=<?php echo SHA1(MD5(SHA1(MD5($_SESSION['nim'])))) ?>" type="button" class="btn btn-success" style="border-color: #158873;color: #158873;"><i class="pe-7s-config"></i> Ubah Data</a>
                          <br>
                          <br>

                        <div class="alert alert-info" role="alert" style="font-family:'ubuntu';background-color:#158873">Judul Skipsi 2</div>
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped" style="font-family:'ubuntu'">
                            <thead>
                              <tr>
                                <th class="text-center" width="5%">Atrribute</th>
                                <th class="text-center" width="35%">Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Judul Skripsi</td>
                                <td><?php if(isset($judul2)) { echo $judul2; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                              <tr>
                                <td>Desciptions Judul</td>
                                <td><?php if(isset($description2)) { echo $description2; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                              <tr>
                                <td>Dosen Pembimbing</td>
                                <td><?php $i=0;
                                      foreach($kPembimbing2 as $pemb2){
                                        if($pembimbing2 == $i++)
                                          echo $pemb2;
                                        }
                                        ?>
                                </td>
                              </tr>
                              <tr>
                                <td>Status Judul</td>
                                <td><?php if(isset($button2)) { echo $button2; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                          <a href="media.php?action=edit-judul2&token=<?php echo MD5(SHA1(MD5(SHA1($_SESSION['nim'])))) ?>" type="button" class="btn btn-success" style="border-color: #158873;color: #158873;"><i class="pe-7s-config"></i> Ubah Data</a>
                        </div>
                      </div>
                      <?php } ?>
                      </div>
                    </div>
                </div>
            </div>

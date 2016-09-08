<?php
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
            <?php if(isset($register) =='') { ?>
            <div class="col-md-12">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
              <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Detail Pengajuan Judul</div>
                <div class="panel-body">
                    <a href="media.php?action=ajukan-judul" class="btn btn-success">Ajukan Judul Baru</a>
                </div>
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
                                <td><?php if(isset($pembimbing1)) { echo $pembimbing1; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr>  
                              <tr>
                                <td>Status Judul </td>
                                <td><?php //echo $pembimbing2 ?></td>
                              </tr>                                                                                       
                            </tbody>
                          </table>  
                          </div> 
                          <a href="media.php?action=edit-judul1&token=<?php echo base64_encode($_SESSION['nim']) ?>" type="button" class="btn btn-success" style="border-color: #158873;color: #158873;"><i class="pe-7s-config"></i> Ubah Data</a> 
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
                                <td><?php if(isset($pembimbing2)) { echo $pembimbing2; } else { echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>'; } ?></td>
                              </tr> 
                              <tr>
                                <td>Status Judul</td>
                                <td><?php //echo $pembimbing2 ?></td>
                              </tr>             
                            </tbody>
                          </table>     
                          </div>                           
                          <a href="media.php?action=edit-judul2&token=<?php echo base64_encode($_SESSION['nim']) ?>" type="button" class="btn btn-success" style="border-color: #158873;color: #158873;"><i class="pe-7s-config"></i> Ubah Data</a>
                        </div> 
                      </div>
                      <?php } ?> 
                    </div>
                </div>
            </div>
            
<?php
    //include config
    include_once('../library/config.php');
    //include environment
    include('../library/environment.php');
    //include koneksi
    include('../library/database.php');
    //var session nim
    $var = $_SESSION['nim'];
    //query
    $query  = "SELECT * FROM tbl_mahasiswa WHERE nim = '$var'";
    $result =  mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            $nim            = $row['nim'];
            $nama_mhs       = $row['nama_mhs'];
            $kode_tahun     = $row['kode_tahun'];
            $kode_jurusan   = $row['kode_jurusan'];
            $semester       = $row['semester'];
        }
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                	<div class="col-md-12">
		            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
		              <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-user"></i> Profile Mahasiswa</div>
		                <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center" width="15%">Atrribute</th>
                              <th class="text-center" width="35%">Value</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>NIM</td>
                              <td><?php echo $nim ?></td>
                            </tr>
                            <tr>
                              <td>Nama Mahasiswa</td>
                              <td><?php echo $nama_mhs ?></td>
                            </tr>
                            <tr>
                              <td>Semester</td>
                              <td><?php echo $semester ?></td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                    </div>
		                </div>
                	</div>
                </div>
            </div>
        </div>

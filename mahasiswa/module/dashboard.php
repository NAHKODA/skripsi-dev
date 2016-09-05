                    <?php 
                        //include config
                        include_once('../library/config.php');
                        //include environment
                        include('../library/environment.php');
                        //include koneksi
                        include('./library/database.php');
                        //var session nim
                        $var = $_SESSION['nim'];
                        //query
                        $query  = "SELECT * FROM view_mahasiswa WHERE nim = '$var'";
                        $result =  mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                $nim            = $row['nim'];
                                $nama_mhs       = $row['nama_mhs'];
                                $kode_tahun     = $row['kode_tahun'];
                                $kode_jurusan   = $row['kode_jurusan'];
                                $semester       = $row['semester'];
                            }

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
                    ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-6">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-notebook"></i> Panduan
                </div>
                  <div class="panel-body">                
                    <ul class="list-unstyled">
                      <li style="margin-bottom:10px"><i class="fa fa-info-circle color-green"></i> Mahasiswa wajib memasukkan 2 judul (tidak boleh kurang ) dan memlilih pembimbing 1 dan 2.</li>
                      <li><i class="fa fa-info-circle color-green"></i> Mahasiswa harus menyertai judul dengan keterangan pendek yang menerangkan.</li>
                        <ul class="list-unstyled">
                            <li style="margin-left:20px"><i class="fa fa-arrow-circle-right color-green"></i> Tujuan atau alasan dipilihnya judul tersebut.</li>
                            <li style="margin-left:20px"><i class="fa fa-arrow-circle-right color-green"></i> Apa saja yang akan dihasilkan oleh judul tersebut.</li>
                      <li style="margin-top:10px"><i class="fa fa-info-circle color-green"></i> Mahasiswa dapat menyertakan gambar (jpeg) yang berisikan diagram (DFD atau FLOWCART atau yang lainnya) untuk menerangkan judul yang dipilih.</li>      
                        </ul>
                    </ul>
                  </div>
              </div>
              </div>

            <div class="col-md-6">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-user"></i> Detail Account
                </div>
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
                                  <td>Kode Tahun</td>
                                  <td><?php echo $kode_tahun ?></td>
                                </tr>
                                <tr>
                                  <td>Kode Jurusan</td>
                                  <td><?php echo $kode_jurusan ?></td>
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


            <div class="row"> 
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
              <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Detail Pengajuan Judul</div>
              <div class="panel-body">                
                      <div id="chart-grafik">
                      </div>
                      <div class="col-md-6">
                        <div class="table-responsive">
                        <div class="alert alert-info">
                          Judul Skripsi 1
                        </div>
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
                                <td>Status Judul</td>
                                <td><?php //echo $pembimbing2 ?></td>
                              </tr>             
                            </tbody>
                          </table>     
                          </div>             
                          </div>

                          <div class="col-md-6">
                            <div class="table-responsive">
                            <div class="alert alert-info">
                              Judul Skripsi 2
                            </div>
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
                                    <td>Status Judul </td>
                                    <td><?php //echo $pembimbing2 ?></td>
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
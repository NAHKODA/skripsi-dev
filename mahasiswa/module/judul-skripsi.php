        <div class="content">
            <div class="container-fluid">
                <div class="row">
				    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
				      <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Detail Pengajuan Judul Skripsi</div>
				      <div class="panel-body">                
                        <?php
                            //include environmrnt
                            include('../library/environment.php');
                            //var data nim
                            $var = $_SESSION['nim'];
                            //Data mentah yang ditampilkan ke tabel    
                            include ('../library/database.php');
                            $query  = "SELECT * FROM skripsi WHERE nim = '1402040424'";
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
                                <td><?php echo $nim ?></td>
                              </tr>
                              <tr>
                                <td>Nama Mahasiswa</td>
                                <td><?php echo $nama ?></td>
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
                                <td><?php echo $judul1 ?></td>
                              </tr>
                              <tr>
                                <td>Desciptions Judul</td>
                                <td><?php echo $description1 ?></td>
                              </tr> 
                              <tr>
                                <td>Dosen Pembimbing</td>
                                <td><?php echo $pembimbing1 ?></td>
                              </tr>  
                              <tr>
                                <td>Status Judul </td>
                                <td><?php //echo $pembimbing2 ?></td>
                              </tr>                                                                                       
                            </tbody>
                          </table>  
                          </div> 
                          <a href="module/edit-judul1.php?id=<?php echo $nim ?>" type="button" class="btn btn-success" style="border-color: #158873;color: #158873;"><i class="pe-7s-config"></i> Ubah Data</a> 
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
                                <td><?php echo $judul2 ?></td>
                              </tr>
                              <tr>
                                <td>Desciptions Judul</td>
                                <td><?php echo $description2 ?></td>
                              </tr>
                              <tr>
                                <td>Dosen Pembimbing</td>
                                <td><?php echo $pembimbing2 ?></td>
                              </tr> 
                              <tr>
                                <td>Status Judul</td>
                                <td><?php //echo $pembimbing2 ?></td>
                              </tr>             
                            </tbody>
                          </table>     
                          </div>                           
                          <a href="module/edit-judul2.php?id=<?php echo $nim ?>" type="button" class="btn btn-success" style="border-color: #158873;color: #158873;"><i class="pe-7s-config"></i> Ubah Data</a>
                        </div> 
                      </div>
                    </div>
                </div>
            </div>
            
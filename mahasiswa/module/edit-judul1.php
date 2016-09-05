<?php
	//get nim 
	$nim = $_SESSION['nim'];
	//include config
	include_once('../library/config.php');
	//include environment
	include('../library/environment.php');
	//include database
	include('../library/database.php');	 	
	//query select where nim
	$query = "SELECT nim, mahasiswa, judul1, desjudul1, kelas, pembimbing1, prodi FROM skripsi WHERE nim ='$nim'";
	$result =  mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($result)) {
    	$nim 			= $row['nim'];
    	$nama 			= $row['mahasiswa'];
    	$prodi 			= $row['prodi'];
    	$judul 			= $row['judul1'];
    	$desjudul		= $row['desjudul1'];
    	$kelas			= $row['kelas'];
    	$pembimbing		= $row['pembimbing1'];
    }

?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
				    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
				      <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Ubah Pengajuan Judul Skripsi 1</div>
				      <div class="panel-body">
				      <form action="" method="POST">
				      		
				      		<input type="hidden" name="nim" value="<?php echo $nim ?>">
							<div class="form-group">
							  <label for="sel1">Program Studi:</label>
								<select class="form-control" name='prodi' style="width:50%" required=""><?php $i=0;
								foreach($kaprodi as $program_studi){
									if($i==1){
										echo "<option value='$i' selected='selected'>$program_studi</option>";}
									else{
										echo "<option value='$i'>$program_studi</option>";}
									$i++;
									}?>
								</select>
							</div>

                            <div class="form-group">
                                <label for="judul">Nama Mahasiswa</label>
                                <input type="text" name = "nama" class="form-control" placeholder="Masukan Nama Anda." value="<?php echo $nama ?>" required>
                            </div>                            

                            <div class="form-group">
                                <label for="judul">Judul Skripsi</label>
                                <input type="text" name = "judul1" class="form-control" placeholder="Masukan Judul Skripsi Anda." value="<?php echo $judul ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="judul">Descriptions Judul</label>
                                <textarea rows="5" name="desjudul1" class="form-control" placeholder="Here can be your description"><?php echo $desjudul ?></textarea>
                            </div>                            
                            
							<div class="form-group">
							  <label for="sel1">Kelas:</label>
								<select class="form-control" name='kelas' style="width:50%">
								<?php $i=0;
								foreach($kKelas as $kelasku){
									if($i==1){
										echo "<option value='$i' selected='selected'>$kelasku</option>";}
									else{
										echo "<option value='$i'>$kelasku</option>";
									}
									$i++;
								}
								?>
								</select>
							</div>

							<div class="form-group">
							  <label for="sel1">Pilihan Pembimbing:</label>
								<select class="form-control" name='pembimbing1' style="width:50%">
								<?php $i=0;
									foreach($kPembimbing as $pemb){
										if($pembimbing == $i++)
											echo "<option value='$i' selected>$pemb</option>";
										else
											echo "<option value='$i'>$pemb</option>";
									}
								?>
								</select>
							</div>						

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Data</button>
                            <a href="media.php?action=judul-skripsi" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
				      </form>
				      </div>
				     </div>
				</div>
			</div>
		</div>
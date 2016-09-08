<?php
	//get nim 
	$nim = $_SESSION['nim'];
	//include config
	include('../library/config.php');
	//include environment
	include('../library/environment.php');
	//include database
	include('../library/database.php');	 	
	//query select where nim
	$query = "SELECT nim, mahasiswa, judul2, desjudul2, kelas, pembimbing2, prodi FROM skripsi WHERE nim ='$nim'";
	$result =  mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($result)) {
    	$nim 			= $row['nim'];
    	$nama 			= $row['mahasiswa'];
    	$prodi 			= $row['prodi'];
    	$judul 			= $row['judul2'];
    	$desjudul		= $row['desjudul2'];
    	$kelas			= $row['kelas'];
    	$pembimbing		= $row['pembimbing2'];
    }

?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
				    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
				      <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Ubah Pengajuan Judul Skripsi 2</div>
				      <div class="panel-body">
				      <form action="module/update-judul.php" method="POST">
				      		<input type="hidden" name="nim" value="<?php echo $nim ?>">
				      		<input type="hidden" name="mahasiswa" value="<?php echo $_SESSION['nama_mhs'] ?>">
				      		<input type="hidden" name="prodi" value="<?php echo $prodi ?>">
				      		<input type="hidden" name="type" value="edit-judul2">                            

                            <div class="form-group">
                                <label for="judul">Judul Skripsi</label>
                                <input type="text" name = "judul2" class="form-control" placeholder="Masukan Judul Skripsi Anda." value="<?php if(isset($judul)) { echo $judul; } ?>"" required>
                            </div>
                            <div class="form-group">
                                <label for="judul">Descriptions Judul</label>
                                <textarea rows="5" name="desjudul2" class="form-control" placeholder="Here can be your description"><?php if(isset($desjudul)) { echo $desjudul; } ?></textarea>
                            </div>                            
                            
							<div class="form-group">
							  <label for="sel1">Kelas:</label>
								<select class="form-control" name='kelas2' style="width:50%">
								<?php $i=0;
								foreach($kKelas as $kelasku){
									if($i==$kelas){
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
								<select class="form-control" name='pembimbing2' style="width:50%">
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
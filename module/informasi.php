<div class="table-responsive">
	<table class="table table-bordered table-striped">
	    <thead>
	      <tr>
	      	<th class="text-center">No.</th>
	        <th class="text-center">Jenis Kegiatan</th>
	        <th class="text-center">Waktu Pelaksanaan</th>
	        <th class="text-center">Waktu Selesai</th>
	      </tr>
	    </thead>
	    <tbody>
            <?php
                //include environment 
                include('./library/environment.php');
                //include koneksi database   
                include('./library/database.php');
                $query  = "SELECT *  FROM tbl_jadwal";
                $no     = 1;
                $result =  mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {
	                //get data
	                $jenis_kegiatan 		= $row['jenis_kegiatan'];
	                $mulai_pelaksanaan		= $row['mulai_pelaksanaan'];
	                $selesai_pelaksanaan	= $row['selesai_pelaksanaan'];
                
            ?>	    
	      <tr>
	      	<td class="text-center"><?php echo $no ?></td>
	        <td><?php echo $jenis_kegiatan ?></td>
	        <td class="text-center"><?php echo $mulai_pelaksanaan ?></td>
	        <td class="text-center"><?php echo $selesai_pelaksanaan ?></td>
	      </tr>
            <?php
                $no++;
                }
            ?>	      
	    </tbody>
	</table>
</div>
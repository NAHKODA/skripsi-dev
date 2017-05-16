<?php
	//include config
	include_once('../library/config.php');
	//include environment
	include('../library/environment.php');
	//include database
	include('../library/database.php');
	//query select where nim
	$query = "SELECT * FROM tbl_informasi";
	$result =  mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($result)) {
      $id            = $row['id'];
    	$judul 			   = $row['judul'];
    	$content 			 = $row['isi_informasi'];
    }

?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
            <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note"></i> Informasi</div>
            <div class="panel-body">
                  <form method="POST" action="module/simpan-informasi.php">
                    <div class="form-group">
                        <label for="judul">Judul Informasi</label>
                        <input type="text" name = "judul" class="form-control" value="<?php echo $judul ?>" placeholder="Masukan Judul Informasi." required>
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                    </div>
                    <div class="form-group">
                        <label for="judul">Keterangan Informasi</label>
                        <textarea rows="5" name="content" class="ckeditor" placeholder="Here can be your description"><?php echo $content ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Informasi</button>
                    <a href="media.php?action=dashboard" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>

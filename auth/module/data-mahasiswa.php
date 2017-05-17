<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
        <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-study"></i> Data Mahasiswa</div>
        <div class="panel-body">
          <a href="media.php?action=tambah-mahasiswa" class="btn btn-md btn-success" style="margin-bottom:10px"><i class="fa fa-plus"></i> Tambah Data</a>
          <table id="data-mahasiswa" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Semester</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              <?php
              //include config
              include_once('../library/config.php');
              //include environment
              include('../library/environment.php');
              //include database
              include('../library/database.php');
              //query select where nim
              $query = "SELECT * FROM tbl_mahasiswa ORDER BY nim ASC";
              $result =  mysqli_query($connect, $query);
              $no = 1;
                while ($row = mysqli_fetch_array($result)) {
              ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nim']?></td>
                    <td><?php echo $row['nama_mhs']?></td>
                    <td><?php echo $row['semester']?></td>
                    <td class="text-center">
                        <a href="media.php?action=edit-mahasiswa&nim=<?php echo $row['nim']?>&token=<?php echo SHA1(MD5(SHA1(MD5($row['nim'])))) ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="media.php?action=hapus-mahasiswa&nim=<?php echo $row['nim']?>&token=<?php echo SHA1(MD5(SHA1(MD5($row['nim'])))) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
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

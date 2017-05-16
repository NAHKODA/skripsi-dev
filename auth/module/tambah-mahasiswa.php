<div class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
            <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-study"></i> Tambah Mahasiswa</div>
            <div class="panel-body">
                  <form method="POST" action="module/simpan-mahasiswa.php">
                    <div class="form-group">
                        <label for="judul">NIM</label>
                        <input type="text" name = "nim" class="form-control" placeholder="Masukan NIM Mahasiswa." required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Nama Mahasiswa</label>
                        <input type="text" name = "nama_mhs" class="form-control" placeholder="Masukan Nama Mahasiswa." required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Password</label>
                        <input type="password" name = "password" class="form-control" placeholder="Masukan Password Mahasiswa." required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Kode Tahun</label>
                        <input type="text" name = "kode_tahun" class="form-control" placeholder="Masukan Kode Tahun." required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Kode Jurusan</label>
                        <input type="text" name = "kode_jurusan" class="form-control" placeholder="Masukan Kode Jurusan." required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Semester</label>
                        <input type="text" name = "semester" class="form-control" placeholder="Masukan Semester Mahasiswa." required>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan Data</button>
                    <a href="media.php?action=dashboard" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>

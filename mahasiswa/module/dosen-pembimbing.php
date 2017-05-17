<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
          <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-users"></i> Dosen Pembimbing 1</div>
          <div class="panel-body">
            <?php $i=0;
            foreach($kPembimbing1 as $pemb1){
              if($i != 0){
                echo '<table class="table table-bordered table-striped">
                <thead>
                <tr>
                <th class="text-center" width="15%">Nama Dosen</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>'.$pemb1.'</td>
                </tr>
                </tbody>
                </table>';
              }
              $i++;
            }
            ?>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
          <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-users"></i> Dosen Pembimbing 2</div>
          <div class="panel-body">
            <?php $i=0;
            foreach($kPembimbing2 as $pemb2){
              if($i != 0){
                echo '<table class="table table-bordered table-striped">
                <thead>
                <tr>
                <th class="text-center" width="15%">Nama Dosen</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>'.$pemb2.'</td>
                </tr>
                </tbody>
                </table>';
              }
              $i++;
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

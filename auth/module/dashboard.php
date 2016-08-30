        <script>
        var chart; 
        $(document).ready(function() {
              chart = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'chart-pie',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: 'Data Alumni - Universitas KH. A. Wahab Hasbullah '
                 },
                 tooltip: {
                    formatter: function() {
                        return '<b>'+
                        this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' % ';
                    }
                 },
                 
                
                 plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: 'green',
                            formatter: function() 
                            {
                                return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) +' % ';
                            }
                        }
                    }
                 },
       
                    series: [{
                    type: 'pie',
                    name: 'Browser share',
                    data: [
              					<?php
                        include "../library/environment.php";
                        include "../library/database.php";

                        $query = mysqli_query($connect,"SELECT prodi, count(*)  as jumlah FROM tbl_trace group by prodi");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $prodi  = $row['prodi'];
                            $jumlah = $row['jumlah'];
                            if ($prodi == '0204') {
                              $prodi1 = 'Teknik Informatika';
                            }elseif($prodi == '0205'){
                              $prodi1 = 'Sistem Informasi';
                            }elseif ($prodi == '0306') {
                              $prodi1 = 'Agribisnis';
                            }elseif ($prodi == '0307'){
                              $prodi1 = 'Agreokoteknologi';
                            }elseif ($prodi == '0309') {
                              $prodi1 = 'Teknik Pertanian';
                            }elseif ($prodi == '0308') {
                              $prodi1 = 'Teknologi Hasil Pertanian';
                            }elseif ($prodi == '0101') {
                              $prodi1 = 'Pendidikan Agama Islam';
                            }elseif ($prodi == '0102') {
                              $prodi1 = 'Pendidikan Bahasa Arba';
                            }elseif ($prodi == '0103') {
                              $prodi1 = 'Ekonomi Syariah';
                            }elseif ($prodi == '0410') {
                              $prodi1 = 'Pendidikan Biologi';
                            }elseif ($prodi == '0411') {
                              $prodi1 = 'Pendidikan Fisika';
                            }elseif ($prodi == '0412') {
                              $prodi1 = 'Pendidikan Matematika';
                            }elseif ($prodi == '0413') {
                              $prodi1 = 'Pendidikan Bahasa Inggris';
                            }elseif ($prodi == '0514') {
                              $prodi1 = 'Manajemen';
                            }else{
                              $prodi1 = 'prodi not found';
                            }
                           
                            ?>
                            ['<?php echo $prodi1 ?>', <?php echo $jumlah; ?> ],
                            
                        
                        <?php 
                            } 
                        ?>
                   
                    ]
                }]
              });
        });

        var chart; 
        $(document).ready(function() {
              chart = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'chart-grafik',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: 'Data Alumni - Universitas KH. A. Wahab Hasbullah '
                 },
                 tooltip: {
                    formatter: function() {
                        return '<b>'+
                        this.point.name;
                    }
                 },
                 
                
                 plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: 'green',
                            formatter: function() 
                            {
                                return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) +' % ';
                            }
                        }
                    }
                 },
       
                    series: [{
                    type: 'column',
                    name: 'Grafik Batang Alumni - Universitas KH. A. Wahab Hasbullah.',
                    data: [
              					<?php
                        include "../library/environment.php";
                        include "../library/database.php";

                        $query = mysqli_query($connect,"SELECT prodi, count(*)  as jumlah FROM tbl_trace group by prodi");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $prodi  = $row['prodi'];
                            $jumlah = $row['jumlah'];
                            if ($prodi == '0204') {
                              $prodi1 = 'Teknik Informatika';
                            }elseif($prodi == '0205'){
                              $prodi1 = 'Sistem Informasi';
                            }elseif ($prodi == '0306') {
                              $prodi1 = 'Agribisnis';
                            }elseif ($prodi == '0307'){
                              $prodi1 = 'Agreokoteknologi';
                            }elseif ($prodi == '0309') {
                              $prodi1 = 'Teknik Pertanian';
                            }elseif ($prodi == '0308') {
                              $prodi1 = 'Teknologi Hasil Pertanian';
                            }elseif ($prodi == '0101') {
                              $prodi1 = 'Pendidikan Agama Islam';
                            }elseif ($prodi == '0102') {
                              $prodi1 = 'Pendidikan Bahasa Arba';
                            }elseif ($prodi == '0103') {
                              $prodi1 = 'Ekonomi Syariah';
                            }elseif ($prodi == '0410') {
                              $prodi1 = 'Pendidikan Biologi';
                            }elseif ($prodi == '0411') {
                              $prodi1 = 'Pendidikan Fisika';
                            }elseif ($prodi == '0412') {
                              $prodi1 = 'Pendidikan Matematika';
                            }elseif ($prodi == '0413') {
                              $prodi1 = 'Pendidikan Bahasa Inggris';
                            }elseif ($prodi == '0514') {
                              $prodi1 = 'Manajemen';
                            }else{
                              $prodi1 = 'prodi not found';
                            }
                           
                            ?>
                            ['<?php echo $prodi1 ?>', <?php echo $jumlah; ?> ],
                            
                        
                        <?php 
                            } 
                        ?>
                   
                    ]
                }]
              });
        });         
    </script>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
				    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
				      <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-graph"></i> Grafik Pie Alumni - Universitas KH. A. Wahab Hasbullah</div>
				      <div class="panel-body">                
                    	<div id="chart-pie">
                    	</div>
                      </div>
                    </div>
				    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
				      <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-graph3"></i> Grafik Batang Alumni - Universitas KH. A. Wahab Hasbullah</div>
				      <div class="panel-body">                
                    	<div id="chart-grafik">
                    	</div>
                      </div>
                    </div>                    
                </div>
            </div>
        </div>
    <div class="sidebar" data-color="purple" data-image="<?php echo $config['base_url'] ?>assets/media/img/sidebar-5.jpg">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="media.php?ref=dashboard" class="simple-text">
                    <i class="pe-7s-home"></i> Administrator
                </a>
            </div>

            <ul class="nav">
                <li <?php if(isset($dashboard)){ echo 'class="active"'; }?>>
                    <a href="media.php?action=dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?php if(isset($profile)){ echo 'class="active"'; }?>>
                    <a href="media.php?action=profile">
                        <i class="pe-7s-user"></i>
                        <p>Profile User</p>
                    </a>
                </li>
                <li <?php if(isset($mahasiswa)){ echo 'class="active"'; }?>>
                    <a href="media.php?action=data-mahasiswa">
                        <i class="pe-7s-study"></i>
                        <p>Data Mahasiswa</p>
                    </a>
                </li>
                <li <?php if(isset($data_judul)){ echo 'class="active"'; }?>>
                    <a href="media.php?action=data-pengajuan-judul">
                        <i class="pe-7s-server"></i>
                        <p>Data Pengajuan Judul</p>
                    </a>
                </li>
                <li <?php if(isset($informasi)){ echo 'class="active"'; }?>>
                    <a href="media.php?action=informasi">
                        <i class="pe-7s-note"></i>
                        <p>Informasi</p>
                    </a>
                </li>

                <li class="active-pro">
                    <a href="conf/logout.php">
                        <i class="pe-7s-power"></i>
                        <p>Logout System</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

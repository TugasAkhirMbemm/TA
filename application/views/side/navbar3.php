<header id="header">
    <div class="container">

       <div id="logo" class="pull-left">
        <a href="#hero"><img style="margin-top: -10px" src="<?php echo base_url() ?>master/assets/img/new1.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu"><a href="<?php echo base_url('./') ?>">Home</a></li>
          <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-sm">Login</a></li>
          <li><a href="#about">Profil</a></li>
          <li class="menu-active"><a class="active" href="#">PPDB</a>
            <ul>
              <li class=""><a href="<?php echo base_url('PPDB/Panduan') ?>">Panduan</a></li>
              <li class=""><a href="<?php echo base_url('PPDB/Daftar_Siswa') ?>">Daftar</a></li>
              <li class="menu-has-children"><a href="#">Upload Bukti</a>
                <ul>
                  <li><a href="<?php echo base_url('PPDB/UploadPendaftaran') ?>">Upload Bukti Pendaftaran</a></li>
                  <li><a href="<?php echo base_url('PPDB/UploadDaftarUlang') ?>">Upload Bukti Daftar Ulang</a></li>
                  </ul>
              </li>
              <li class="menu-has-children"><a href="#">Jadwal Tes</a>
                <ul>
                  <li><a href="<?php echo base_url('PPDB/JadwalTestTK') ?>">Jadwal Tes TK</a></li>
                  <li><a href="<?php echo base_url('PPDB/JadwalTestSD') ?>">Jadwal Tes SD</a></li>
                  <li><a href="<?php echo base_url('PPDB/JadwalTestSMP') ?>">Jadwal Tes SMP</a></li>
                  </ul>
              </li>
              <li class="menu-has-children"><a href="#">Pengumuman</a>
                <ul>
                  <li><a href="<?php echo base_url('PPDB/Peng_Awal') ?>">Pengumuman awal</a></li>
                  <li><a href="<?php echo base_url('PPDB/Peng_Akhir') ?>">Pengumuman akhir</a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#portfolio">Galeri</a></li>
          <li><a href="#contact">Kontak kami</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #10ac84">
              <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: bold; color: #fff">Masuk Pengguna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" id="email-modal" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" id="password-modal" placeholder="password">
                    </div>
                    <p class="text-center">
                        <button name="login" type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Masuk</button>
                    </p>
                </form>
                <p class="text-center text-muted">Belum Punya Akun?</p>
                <p class="text-center text-muted"><a href="<?php echo base_url('Daftar') ?>"><strong>Daftar</strong></a>! Segera punya akun!</p>
            </div>
          </div>
        </div>
      </div>
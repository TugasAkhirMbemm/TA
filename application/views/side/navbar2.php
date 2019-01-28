<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <a href="#head"><img style="margin-top: -10px" src="<?php echo base_url() ?>master/assets/img/new1.png" alt="" title="" /></img></a>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="<?php echo base_url('Data_siswa') ?>">Data Diri Siswa</a></li>
        <li class="menu-active"><a href="<?php echo base_url('PPDB/UploadDaftarUlang') ?>">Upload</a></li>
       
        <li class="menu-has-children <?php if($this->uri->segment('1')=="PPDB"){ echo "active";}?>" href="#" ><a href="#">Jadwal</a>
          <ul>
            <li><a href="<?php echo base_url('PPDB/JadwalTestTK') ?>">Jadwal Tes TK</a></li>
            <li><a href="<?php echo base_url('PPDB/JadwalTestSD') ?>">Jadwal Tes SD</a></li>
            <li><a href="<?php echo base_url('PPDB/JadwalTestSMP') ?>">Jadwal Tes SMP</a></li>
          </ul>
        </li>
        <li class="menu-has-children <?php if($this->uri->segment('1')=="Pengumuman"){ echo "active";}?>" href="#" ><a href="#">Pengumuman</a>
          <ul>
            <li><a href="<?php echo base_url('PPDB/Peng_Awal') ?>">Pengumuman awal</a></li>
            <li><a href="<?php echo base_url('PPDB/Peng_Akhir') ?>">Pengumuman akhir</a></li>
          </ul>
        <li><a href="<?php echo base_url('Home') ?>">Logout</a></li>
      </nav>
    </div>
  </header>

</div>
</div>
</div>
</div>
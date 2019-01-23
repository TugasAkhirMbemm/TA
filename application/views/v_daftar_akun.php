<?php $this->load->view('side/head') ?>
<?php $this->load->view('side/navbar2') ?>

<section id="head">
  <div class="container wow fadeIn">
    <div class="section-header"><br>
      <h4 class="section-title" style="color: #fff; font-size: 25px">Yayasan Al-Baitul Amien</h4>
    </div>
  </div>
</section>

<br>
<div class="container">
  <ul class="breadcrumb">
    <li class="breadcrumb-item active">Daftar Akun</li>
</ul>
</div>
<div class="container">
    <div class="col-md-12">
        <div class="box">
            <h2><i class="fa fa-user-plus"></i> Daftar Akun</h2>
            <form autocomplete="off" method="post" action="<?php echo base_url(). 'Daftar/buat'; ?>" enctype="multipart/form-data">
            	<hr>
                 <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="nama" class="form-control" required >
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="number">Password</label>
                    <input type="Password" name="password" class="form-control" required>
                </div>
				<div>
					<br>
                	<button style="float: right; background-color: #10ac84" class="btn btn-success" name="btnSimpan">Simpan</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <br>
    <br>


<?php $this->load->view('side/footer') ?>
<?php $this->load->view('side/js') ?>
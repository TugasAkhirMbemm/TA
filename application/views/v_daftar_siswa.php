<?php $this->load->view('side/head') ?>
<?php $this->load->view('side/navbar3') ?>
<section id="head">
	<div class="container wow fadeIn">
		<div class="section-header"><br>
			<h4 class="section-title" style="color: #fff; font-size: 25px">Yayasan Al-Baitul Amien</h4>
		</div>
	</div>
</section>
<br>
<div class="container">
	<form autocomplete="off" method="post" action="<?php echo base_url("PPDB/t_daftar_siswa")?>" enctype="multipart/form-data">
		<div class="row">
			<div class="card" style="width: 50%; margin-left: 25%">
				<div class="card-header">
					<h2>Form Data Diri</h2>
				</div>
				<div class="card-body">
					<div class="form-group">
						<div class="form-group">
							<label for="judul">Nama Lengkap</label>
							<input type="text" name="nama" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="judul">Alamat</label>
							<input type="text" name="alamat" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="judul">No. Hp</label>
							<input type="text" name="no_hp" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="judul">Asal Sekolah</label>
							<input type="text" name="asal_sekolah" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="jenjang">Jenjang</label>
							<select name="jenjang" class="form-control" required="">
								<option disabled="">--Pilih Jenjang Pendidikan--</option>
								 <?php foreach ($jenjang->result() as $jnj) { ?>
								 	<option value="<?php  echo $jnj -> id_jenjang?>"><?php echo $jnj-> nama_jenjang; ?></option>
								 <?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="card-footer text-right">
					<button style="background-color: #10ac84" class="btn btn-success" name="btnSimpan">Simpan</button>
				</div>
			</div>
		</div>
	</form>
</div>

<!-- <center>
	<ul class="nav nav-tabs">
		<div class="card">
			<div class="card-header ">
				<h2>Form Data Diri</h2>
			</div>
			<div class="card-body p-4">
				<div class="form-group">
					<div class="form-group">
						<label for="judul">Nama Lengkap</label>
						<input type="text" name="nama" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="judul">Alamat</label>
						<input type="text" name="alamat" class="form-control" required="">
					</div>

					<div class="form-group">
						<label for="judul">Asal Sekolah</label>
						<input type="text" name="asal_sekolah" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="jenjang">Jenjang</label>
						<select name="id_jenjang" class="form-control" required="">
							<option>--Pilih Jenjang Pendidikan--</option>
						</select>
					</div>
				</div>
				<div class="card-footer text-right">
					<button style="float: right; background-color: #10ac84" class="btn btn-success" name="btnSimpan">Simpan</button>
				</div>
			</div>
		</div>
	</ul>
</center> -->
<!-- Post -->


<br>
<?php $this->load->view('side/footer') ?>
<?php $this->load->view('side/js') ?>

<?php if ($this->session->flashdata()) { ?>
    <?php echo $this->session->flashdata('Pesan'); ?>                    
<?php } ?>
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

 							<ul class="nav nav-tabs">
 							<center>
				             <div class="card">
				              <div class="card-header ">
				                <h2>Form Data Diri</h2>
				              </div>
				             

			                       <div class="card-body p-4">
			                 <div class="form-group">

			                   <?php if(isset($error)){ ?>
			                    <div class="alert alert-danger alert-dismissible">
			                      <a herf="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                      <?php echo $error; ?>
			                    </div>
			                  <?php } ?>

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
			                    <?php foreach ($jenjang as $row){ ?>
			                    <option value="<?php echo $row->id_jenjang;?>"><?php echo $row->nama_jenjang;?></option>
			                    <?php }?>
			                  </select>
			                </div>

			              </div>
			              <div class="card-footer text-right">
			                <button style="float: right; background-color: #10ac84" class="btn btn-success" name="btnSimpan">Simpan</button>
			              </div>
			              </div>
			               </center>
			               </ul>
			                          <!-- Post -->

                          </div>



<?php $this->load->view('side/footer') ?>
<?php $this->load->view('side/js') ?>
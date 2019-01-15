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

				             <div class="card">
				              <div class="card-header ">
				                <h2>Upload Bukti Daftar Ulang</h2>
				              </div>

			                 <div class="form-group">
			                  <label for="upload_file">Upload Bukti</label>
			                  <br>
			                  <input type="file" name="file">
			                </div>

			              <div class="card-footer text-right">
			                <button style="float: right; background-color: #10ac84" class="btn btn-success" name="btnSimpan">Simpan</button>
			              </div>
			               </ul>

<?php $this->load->view('side/footer') ?>
<?php $this->load->view('side/js') ?>
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

<section id="about">

 <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <form action="" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Jadwal Test SD</h2>
              </div>

              <div class="card-body p-6">

                <table class="table">
              <thead align="center">
              <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Tempat</th>
              </tr>
            </thead>
            <tbody>
              <!-- <?php 
              foreach ($cek as $data) { ?> -->
<tr>
  <td><?php echo $data->tanggal; ?></td>
  <td><?php echo $data->waktu; ?></td>
  <td><?php echo $data->tempat; ?></td>
</tr>
                
              <?php }
              ?>
            </tbody>
          </table>

            </div>
          </form>
          </div>
        </div>
      </div>
    </section>
<br>
<?php $this->load->view('side/footer') ?>
<?php $this->load->view('side/js') ?>
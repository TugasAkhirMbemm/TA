<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Masukkan Nilai Siswa TK</h3><br><br>
        <!-- <a href="<?php echo base_url('petugas/petugasdata/tambahData')?>" class="btn btn-primary pull-left" style="width: 30%;">Tambah Data Petugas</a> -->

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>

           <th>No</th>
            <th>Nama</th>
            <th>Nilai Observasi</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($nilai->result() as $n){
            ?>
              <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $n->nama_siswa; ?></td>
                <td><?php echo $n->nilai_psikotes; ?></td>
                <td style="text-align:center;">
                  <a href="#" class="btn btn-info " onclick="updatejs('<?php echo $n->id_siswa; ?>')">Edit</a>
                  <a class="btn btn-danger " onclick="deleted('<?php echo $n->id_siswa; ?>')">Delete</a>
                </td>
              </tr>
            <?php
            }
            // $n++;
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<script type="text/javascript">
 function deleted(param){
   var proc = window.confirm('Are you sure delete this data?');
   if(proc){
      document.location='<?php echo base_url(); ?>nilai/nilai/delete_nilai/'+param;
    }
  }
  function updatejs(param){
      document.location='<?php echo base_url(); ?>nilai/nilai/detnilaitk/'+param;
  }
</script>

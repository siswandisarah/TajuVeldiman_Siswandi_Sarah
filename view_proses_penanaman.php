<div class="content-wrapper" style="margin-left: 0;">
    <h3 class="text-center py-5">INFORMASI PROSES PENANAMAN DAN PANEN</h3>
    <section class="content">
      <div class="card mb-3 col-md-10 mx-auto my-2 px-3 py-2">
        <div class="row my-2">
          <div class="col-md-6">
            <button class = "btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class ="fa fa-plus"></i> Tambah Proses</button>
          </div>
          <div class="col-md-6">
            <!-- SEARCH FORM -->
            <form class="form-inline float-right">
              <div class="input-group input-group-sm">
              <form method="get" action = "<?php echo site_url().'Rw/informasi_racun'?>">
                <input class="form-control form-control-navbar" type="text" placeholder="Nama pestisida" aria-label="Search" name="keyword" id="keyword">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit" id="keyword">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <?php
  $no= 1;
         
  foreach ($proses as $prs): ?>
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="<?php echo base_url() ?>/assets/foto/<?php echo $prs['foto']; ?>" class="card-img-top" width ="100" height="100">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><th>nomor id : </th><?php echo $prs['id']; ?></h5><br>
        <h5 class="card-title"><th>nama proses adalah : </th><?php echo $prs['nama']; ?></h5><br>
        <h5 class="card-title"><th>Nama Petani : </th><?php echo $prs['nama_petani']; ?></h5><br>
        <h5 class="card-title"><th>Alamat : </th><?php echo $prs['alamat']; ?></h5><br>
        <a href="<?=base_url();?>/rw/proses_penanaman_dan_proses_panen/proses_hapus1/<?=$prs['id'];?>"class ="btn btn-xs btn-danger" class = "btn btn-danger"><i class = "fa fa-trash"></i></a>
        <a href="<?=base_url();?>/rw/proses_penanaman_dan_proses_panen/proses_detail1/<?=$prs['id'];?>"   class ="btn btn-xs btn-success"><i class="fa fa-search-plus"></i></a>
       
      </div>
    </div>
  </div>
</div>
<br>

  <br>

          <?php endforeach; ?>
        
      

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">tambah proses pemanenan atau proses penanaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <?php echo form_open_multipart('/rw/proses_penanaman_dan_proses_panen/tambah_aksi3');?>
      <div class = "form-group">
            <label> Nama proses :</label>
            <input type="text" name= "nama" class= "form-control">
      </div>
      <div class = "form-group">
            <label> Nama petani :</label>
            <input type="text" name= "nama_petani" class= "form-control">
      </div> <div class = "form-group">
            <label> alamat :</label>
            <input type="text" name= "alamat" class= "form-control">
      </div>

      <div class = "form-group">
            <label>Upload foto</label>
            <input type="file" name= "foto" class= "form-control">
      </div>

      <div class = "form-group">
            <label> masukan deskripsi :</label>
            <input type="text" name= "deskription" class= "form-control">
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>

      <?php echo form_close(); ?>
     

      </div>
     
    </div>
  </div>
</div>


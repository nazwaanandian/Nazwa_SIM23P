<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Daftar pasien</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List pasien</h3>
          <div class="card-tools">
            <button type="button" class="btn-btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"> 
            <i class="fas fa-minus"></i>
</button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove"> 
              <i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
    <form action="<?php echo base_url(). "pasien/insert";?>" method="POST">
    <div class="box-body">
        <div class="form-group">
            <label for="nm_pasien">Nama</label>
            <input type="text" class="form-control" name="nm_pasien" id="nm_pasien" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" required>
        </div>
         <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
        </div>
         <div class="form-group">
            <label for="no_telp">No Telepon</label>
            <input type="int" class="form-control" name="no_telp" id="no_telp" placeholder="No Telepon" required>
        </div>
         <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Keluhan" required>
        </div>
         <div class="form-group">
            <label for="tgl_kunjungan">Tanggal Kunjungan</label>
            <input type="date" class="form-control" name="tgl_kunjungan" id="tgl_kunjungan" placeholder="Tanggal Kunjungan" required>
        </div>
        
        <div class="form-group">
            <label for="dokter">Dokter</label>
            <select class="form-control" name="dokter" id="dokter" required>
              <option value="">-- Pilih Dokter --</option>
              <?php if (!empty($dokter_pasien)): ?>
                <?php foreach ($dokter_pasien as $d): ?>
                  <option value="<?= $d->dokter; ?>"><?= $d->dokter; ?></option>
                  <?php endforeach; ?>
              <?php endif; ?>
                </select>
        </div>
        
        
    </div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>
</div>
<div class="card-footer">

          </div>
     </div>
     </section>
     </div>
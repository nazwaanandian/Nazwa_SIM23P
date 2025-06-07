<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Form Pasien</h1>
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
          <h3 class="card-title">Update Data Pasien</h3>
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
    <form action="<?= base_url('pasien/update/'. $pasien['idpasien']);?>" method="POST">
    <div class="box-body">
        <div class="form-group">
            <label for="nm_pasien">Nama Pasien</label>
            <input type="text" class="form-control" name="nm_pasien" value="<?= $pasien['nm_pasien'];?>" id="nm_pasien" placeholder="Nama Pasien" required>
        </div>
        
      <div class="form-group">
    <label for="dokter">Dokter</label>
    <select class="form-control" name="dokter" id="dokter" required>
        <option value="">-- Pilih Dokter --</option>
        <?php if (!empty($dokter_pasien)): ?>
            <?php foreach ($dokter_pasien as $d): ?>
                <option value="<?= $d->dokter; ?>" <?= ($d->dokter == $data->dokter) ? 'selected' : ''; ?>>
                    <?= $d->dokter; ?>
                </option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
</div>


        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tgl_lahir" value="<?= $pasien['tgl_lahir'];?>" id="tgl_lahir" placeholder="Tanggal Lahir" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?= $pasien['alamat'];?>" id="alamat" placeholder="Alamat" required>
        </div>
        <div class="form-group">
            <label for="no_telp">No Telepon</label>
            <input type="text" class="form-control" name="no_telp" value="<?= $pasien['no_telp'];?>" id="no_telp" placeholder="No Telepon" required>
        </div>
        <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <input type="text" class="form-control" name="keluhan" value="<?= $pasien['keluhan'];?>" id="keluhan" placeholder="Keluhan" required>
        </div>
        <div class="form-group">
            <label for="tgl_kunjungan">Tanggal Kunjungan</label>
            <input type="text" class="form-control" name="tgl_kunjungan" value="<?= $pasien['tgl_kunjungan'];?>" id="tgl_kunjungan" placeholder="Tanggal Kunjungan" required>
        </div>
        <select name="status" class="form-control" required>
    <?php foreach ($status_pasien as $s): ?>
        <option value="<?= $s->idstatus ?>" <?= ($s->idstatus == $pasien->idstatus) ? 'selected' : '' ?>>
            <?= $s->status ?>
        </option>
    <?php endforeach; ?>
</select>

    </div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= base_url('pasien');?>" class="btn btn_secondary">Batal</a>
</div>
</form>
</div>
<div class="card-footer">

          </div>
     </div>
     </section>
     </div>
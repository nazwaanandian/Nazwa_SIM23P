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
          <li class="breadcrumb-item active">Update Pasien</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Update Data Pasien</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <form action="<?= base_url('pasien/update/'. $pasien['idpasien']); ?>" method="POST">
        <div class="form-group">
          <label for="nm_pasien">Nama Pasien</label>
          <input type="text" class="form-control" name="nm_pasien" value="<?= $pasien['nm_pasien']; ?>" required>
        </div>

        <div class="form-group">
          <label for="dokter">Dokter</label>
          <select class="form-control" name="dokter" id="dokter" required>
            <option value="">-- Pilih Dokter --</option>
            <?php foreach ($dokter_pasien as $d): ?>
              <option value="<?= $d->dokter; ?>" <?= $d->dokter == $pasien['dokter'] ? 'selected' : '' ?>>
                <?= $d->dokter; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="tgl_lahir">Tanggal Lahir</label>
          <input type="date" class="form-control" name="tgl_lahir" value="<?= $pasien['tgl_lahir']; ?>" required>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" value="<?= $pasien['alamat']; ?>" required>
        </div>

        <div class="form-group">
          <label for="no_telp">No Telepon</label>
          <input type="text" class="form-control" name="no_telp" value="<?= $pasien['no_telp']; ?>" required>
        </div>

        <div class="form-group">
          <label for="keluhan">Keluhan</label>
          <input type="text" class="form-control" name="keluhan" value="<?= $pasien['keluhan']; ?>" required>
        </div>

        <div class="form-group">
          <label for="tgl_kunjungan">Tanggal Kunjungan</label>
          <input type="date" class="form-control" name="tgl_kunjungan" value="<?= $pasien['tgl_kunjungan']; ?>" required>
        </div>

        <!-- Optional: Tambahkan jika status bisa diubah -->
        <div class="form-group">
          <label for="status">Status</label>
          <select class="form-control" name="status" id="status" required>
            <option value="proses" <?= $pasien['status'] == 'proses' ? 'selected' : '' ?>>Proses</option>
            <option value="diterima" <?= $pasien['status'] == 'diterima' ? 'selected' : '' ?>>Diterima</option>
            <option value="ditolak" <?= $pasien['status'] == 'ditolak' ? 'selected' : '' ?>>Ditolak</option>
          </select>
        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="<?= base_url('pasien'); ?>" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</section>
</div>

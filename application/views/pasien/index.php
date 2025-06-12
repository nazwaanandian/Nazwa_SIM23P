<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Daftar Pasien</h1>
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
          <h3 class="card-title">List Pasien</h3>
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
  <a href="<?= base_url('pasien/tambah'); ?>" class="btn btn-primary mb-3">Tambah Pasien</a>

  <?php if (!empty($pasien)): ?>
    <table id="datatable" class="table table-bordered table-striped">
      <thead>
  <tr>
    <th>Nama Pasien</th>
    <th>Dokter</th>
    <th>Tanggal Lahir</th>
    <th>Alamat</th>
    <th>No Telepon</th>
    <th>Keluhan</th>
    <th>Tanggal Kunjungan</th>
    <th>Status</th>

    <?php if ($this->session->userdata('role') == 'admin'): ?>
      <th>Aksi</th>
    <?php endif; ?>
  </tr>
</thead>

<tbody>
  <?php foreach ($pasien as $p): ?>
    <tr>
      <td><?= $p['nm_pasien']; ?></td>
      <td><?= $p['dokter']; ?></td>
      <td><?= $p['tgl_lahir']; ?></td>
      <td><?= $p['alamat']; ?></td>
      <td><?= $p['no_telp']; ?></td>
      <td><?= $p['keluhan']; ?></td>
      <td><?= $p['tgl_kunjungan']; ?></td>
      <td><?= $p['status']; ?></td>

      <?php if ($this->session->userdata('role') == 'admin'): ?>
        <td>
          <div class="btn-group btn-group-sm" role="group" aria-label="Aksi">
            <a href="<?= base_url('pasien/edit/' . $p['idpasien']); ?>" class="btn btn-info" title="Edit">
              <i class="fas fa-edit"></i>
            </a>
            <a href="<?= base_url('pasien/edit_status/' . $p['idpasien']); ?>" class="btn btn-sm" style="background-color: orange; color: white;" title="Edit Status">
              <i class="fas fa-tasks"></i>
            </a>
            <a href="<?= base_url('pasien/hapus/' . $p['idpasien']); ?>" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
              <i class="fas fa-trash"></i>
            </a>
          </div>
        </td>
      <?php endif; ?>
    </tr>
  <?php endforeach; ?>
</tbody>
    </table>
  <?php else: ?>
    <p class="text-muted">Belum ada data pasien.</p>
  <?php endif; ?>
</div>
     <div class="card-footer">

          </div>
     </div>
     </section>
     </div>
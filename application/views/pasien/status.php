<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <h1>Status Pendaftaran Pasien</h1>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Status Pasien</h3>
      </div>

      <div class="card-body">
        <?php if (!empty($pasien)): ?>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama Pasien</th>
                <th>Dokter</th>
                <th>Tanggal Kunjungan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($pasien as $p): ?>
              <tr>
                <td><?= $p->nm_pasien; ?></td>
                <td><?= $p->dokter; ?></td>
                <td><?= $p->tgl_kunjungan; ?></td>
                <td><strong><?= ucfirst($p->status); ?></strong></td>
                <td>
                  <?php if ($p->status == 'proses'): ?>
                    <a href="<?= base_url("admin/pendaftaran/status/{$p->idpasien}/disetujui"); ?>" class="btn btn-success btn-sm">Setujui</a>
                    <a href="<?= base_url("admin/pendaftaran/status/{$p->idpasien}/ditolak"); ?>" class=_


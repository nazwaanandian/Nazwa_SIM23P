<div class="content-wrapper">
    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Pasien</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Periode: <?= $tanggal_dari ?> s.d <?= $tanggal_sampai ?></h3>
            </div>
            <div class="card-body">
                <?php
                    $no = 1;
                    $jumlah_diterima = 0;
                    $jumlah_ditolak = 0;
                ?>

                <!-- Hitung dari data hasil -->
                <?php foreach ($pasien as $b): ?>
                    <?php
                        if (strtolower($b->status) === 'diterima') {
                            $jumlah_diterima++;
                        } elseif (strtolower($b->status) === 'ditolak') {
                            $jumlah_ditolak++;
                        }
                    ?>
                <?php endforeach; ?>

                <!-- Kotak Rekap -->
<!-- Kotak Rekap Diperkecil -->
<div class="row mb-3">
    <div class="col-md-3">
        <div class="card bg-success text-white shadow-sm">
            <div class="card-body p-2">
                <h6 class="card-title mb-1">Pasien Diterima</h6>
                <h4 class="card-text"><?= $jumlah_diterima ?></h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-danger text-white shadow-sm">
            <div class="card-body p-2">
                <h6 class="card-title mb-1">Pasien Ditolak</h6>
                <h4 class="card-text"><?= $jumlah_ditolak ?></h4>
            </div>
        </div>
    </div>
</div>


                <!-- Tabel -->
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Pasien Diterima</th>
                            <th>Pasien Ditolak</th>
                            <th>Keluhan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pasien as $b): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $b->nm_pasien ?></td>
                                <td><?= (strtolower($b->status) === 'diterima') ? '✔' : '-' ?></td>
                                <td><?= (strtolower($b->status) === 'ditolak') ? '✔' : '-' ?></td>
                                <td><?= $b->keluhan ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</div>
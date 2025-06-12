<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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

    <!-- Default Box-->
     <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Pasien</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toogle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toogle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
</div>
</div>
    <div class="box-body">
        <h3>Laporan Pasien</h3>
        <form action="<?= base_url('pasien/cetak_laporan') ?>" method="post">
    <div class="form-group">
        <label>Dari Tanggal:</label>
        <input type="date" name="tanggal_dari" required>

        <label>Sampai Tanggal:</label>
        <input type="date" name="tanggal_sampai" required>
    </div>
    <button type="submit">Cetak Laporan</button>
</form>


</div>
        <!-- /.card-body -->
         <div class="card-footer">
             
</div>
        <!-- /.card-footer-->
</div>
        <!-- /.card-->
</div>
</section>
        <!-- /.content-->
</div>
                
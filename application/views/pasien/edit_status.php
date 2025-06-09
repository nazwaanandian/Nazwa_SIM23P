<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Form status</h1>
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
          <h3 class="card-title">Update Data status</h3>
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
<form action="<?= base_url('pasien/update_status/' . $idpasien); ?>" method="POST">
    <div class="box-body">
        <label>Status</label>
        <select name="status" class="form-control" required>
            <?php foreach ($status_pasien as $s): ?>
                <option value="<?= $s->idstatus ?>" <?= ($status['status'] == $s->status) ? 'selected' : '' ?>>
                    <?= $s->status ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('pasien'); ?>" class="btn btn-secondary">Batal</a>
    </div>
</form>


</div>
<div class="card-footer">

          </div>
     </div>
     </section>
     </div>
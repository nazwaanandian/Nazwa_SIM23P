<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Form Status</h1>
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
          <h3 class="card-title">Update Status Pasien</h3>
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
    <form action="<?= base_url('status/update/'. $status_pasien['idpasien']);?>" method="POST">
    <div class="box-body">
       
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" value="<?= $status_pasien['status'];?>" id="status" placeholder="Status" required>
        </div>
       
    </div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= base_url('status_pasien');?>" class="btn btn_secondary">Batal</a>
</div>
</form>
</div>
<div class="card-footer">

          </div>
     </div>
     </section>
     </div>
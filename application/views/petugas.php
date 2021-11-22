<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0"><?php echo $title; ?></h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">


                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
              <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
  <thead>
  <tr>
    <th>No</th>
    <th>Username</th>
    <th>Nama Lengkap</th>
    <th>Opsi</th>
  </tr>
  </thead>
  <tbody>
    <?php 
      $no=0;
      foreach ($petugas->result() as $value):
        $no++;
    ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $value->username; ?></td>
    <td><?php echo $value->nama_petugas ?></td>
    <td>
      <a href=" <?php echo base_url('petugas/ubah/').$value->id_petugas ?>" class="btn btn-xs btn-warning">Edit</a>
      <a href=" <?php echo base_url('petugas/hapus/').$value->id_petugas ?>" class="btn btn-xs btn-danger">Hapus</a>
    </td>
  </tr>
    <?php 
      endforeach;
    ?>
  </tbody>
  <tfoot>
  <tr>
    <th>No</th>
    <th>Username</th>
    <th>Nama Lengkap</th>
    <th>Opsi</th>
  </tr>
  </tfoot>
</table> 

                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
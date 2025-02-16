<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <!-- Input addon -->
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Data Produk</h3>
              </div>
              <div class="card-body">
                <?php 
                      require_once 'controllers/class_produk.php';
                      $obj = new Produk($dbh);
                      // panggil method tampilkan data produk
                      $rs = $obj->getAllJenis();
            
                    ?>  
        <form action="controllers/ControllerProduk.php" method="POST">
                <h4>Kode</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input id="kode" name="kode" type="text" class="form-control" placeholder="Kode">
                </div>

                <h4>Nama Barang</h4>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-archive"></i></span>
                </div>
               <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Barang">
              </div>

                <h4>Harga</h4>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                </div>
                <input id="harga_beli" name="harga_beli" type="text" class="form-control" placeholder="Harga Beli">
              </div>

            <h4>Stok</h4>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-bars"></i></span>
            </div>
            <input id="stok" name="stok" type="text" class="form-control" placeholder="Stok">
          </div>

          <h4>Minimal Stok</h4>

          <div class="input-group mb-3">
           <div class="input-group-prepend">
             <span class="input-group-text"><i class="fas fa-minus"></i></span>
            </div>
            <input id="min_stok" name="min_stok" type="text" class="form-control" placeholder="Minimal Stok">
          </div>

          <h4>Kategori</h4>

            <div class="input-group mb-3">
             <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-clone"></i></span>
              </div>
              <select id="idjenis" name="idjenis" class="form-control">
                          <option>-- Jenis Produk --</option>
                          <?php 
                            foreach($rs as $j){
                          ?>
                            <option value="<?= $j->id; ?>"><?= $j->nama; ?></option>
                          <?php } ?>
                        </select>
              </div>
              </div>
            <div class="card-footer">
                <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
            </div>
        </form>
          </div>
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
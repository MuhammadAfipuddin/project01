<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Belanja</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Fixed Layout</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

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
                    <div class="container d-flex row my-5">
                        <div class="col-9">
                            <form method="POST" action="form_belanja.php">
                                <div class="form-group row">
                                    <label for="text" class="col-4 col-form-label">Customer</label> 
                                    <div class="col-8">
                                    <input id="text" name="nama_customer" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Pilih Produk</label> 
                                    <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                    </div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="text1" class="col-4 col-form-label">Jumlah Produk</label> 
                                    <div class="col-8">
                                    <input id="text1" name="jumlah" type="text" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <input name="kirim" type="submit" value="kirim" class="btn btn-primary"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-3">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                                <li class="list-group-item">TV : 4.200.000</li>
                                <li class="list-group-item">Kulkas : 3.100.000</li>
                                <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                                <li class="list-group-item active">Harga Dapat Berubah Setiap Hari</li>
                            </ul>
                        </div>
                    </div>

                <?php
                    $nama = $_POST['nama_customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];

                    echo 'Nama Customer : '.$nama;
                    echo '<br/>Produk Pilihan : '.$produk;
                    echo '<br/>Jumlah Beli : '.$jumlah;

                    if ($produk == 'tv') {
                        echo "<br/>Total Belanja : Rp. ".$jumlah*4200000;
                    } elseif ($produk == 'kulkas') {
                        echo "<br/>Total Belanja : Rp. ".$jumlah*3100000;
                    } else {
                        echo "<br/>Total Belanja : Rp. ".$jumlah*3800000;
                    }
                ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
            </div>
        </div>
    </section>
</div>

<?php
    include_once "footer.php";
?>
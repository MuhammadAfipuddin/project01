<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Menghitung Lingkaran</h1>
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
                    <?php
                        // definisikan konstanta
                        define('PHI',3.14);
                        define('DBNAME','inventori');
                        define('DBSERVER','localhost');

                        $jari = 8;
                        $luas = PHI * $jari * $jari;
                        $kll = 2 * PHI * $jari;

                        echo 'Luas Lingkaran dengan Jari '.$jari." : ".$luas;
                        echo '<br>Kelilingnya : '.$kll;
                    ?>
                        <hr>
                    <?php
                        echo 'Nama databasenya : '.DBNAME;
                        echo '<br>Lokasi databasenya ada di : '.DBSERVER;

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
<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Persegi Panjang</h1>
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
                        require_once "class_persegi_panjang.php";

                        $pp1 = new PersegiPanjang(20, 15);
                        $pp2 = new PersegiPanjang(10, 5);

                        echo "Panjang : ".$pp1->panjang;
                        echo "<br>Lebar : ".$pp1->lebar;
                        echo "<br>Luas Persegi Panjang I = ".$pp1->getLuas();
                        echo "<br/> Keliling Persegi Panjang I = ".$pp1->getkeliling();

                        echo "<br><br>Panjang : ".$pp2->panjang;
                        echo "<br>Lebar : ".$pp2->lebar;
                        echo "<br/> Luas Persegi Panjang II = ".$pp2->getLuas();
                        echo "<br/> Keliling Persegi Panjang II = ".$pp2->getkeliling();
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


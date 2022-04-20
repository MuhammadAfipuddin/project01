<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dispenser</h1>
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
                    class Dispenser{
                        protected $volume;
                        protected $hargaSegelas;
                        private $volumeGelas;
                        public $namaMinuman;
                        public $uang;

                        function  volume($vol){
                            $this->volume = $vol;
                        }
                    }

                    class Minuman extends Dispenser{
                        function __construct($uang, $namaMinuman, $volumeGelas, $hargaSegelas){
                            $this->uang = $uang;
                            $this->namaMinuman = $namaMinuman;
                            $this->volumeGelas = $volumeGelas;
                            $this->hargaSegelas = $hargaSegelas;
                        }

                        public function transaksi($uang){
                            $this->uang = $uang;
                            return $this->uang - $this->hargaSegelas;
                        }

                        public function volumeSetelahDibeli(){
                            $this->volume = $this->volume - $this->volumeGelas;
                            return $this->volume;
                        }

                        public function cetak(){
                            echo "Nama Minuman : ".$this->namaMinuman;
                            echo "<br>Uang sekarang : ".$this->uang;
                            echo "<br>Volume dispenser awal : ".$this->volume." ml";
                            echo "<br>Harga segelas minuman : "."Rp. ".$this->hargaSegelas;
                            echo "<br>Volume dispenser setelah diambil segelas : ".$this->volumeSetelahDibeli()." ml";
                            echo "<br>Sisa uang sekarang : "."Rp. ".$this->transaksi($this->uang);
                        }
                    }

                    $minuman = new Minuman(10000, "Capucino Cincau", 250, 5000);
                    $minuman->transaksi($minuman->uang);
                    $minuman->Volume(20000);
                    $minuman->cetak();
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


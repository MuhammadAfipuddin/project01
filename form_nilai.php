<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Nilai</h1>
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
                <div class="container mt-5">
                    <form method="GET" action="form_nilai.php">
                        <div class="form-group row mb-2">
                            <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
                            <div class="col-8">
                            <input id="text" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                            <div class="col-8">
                            <select id="select" name="matkul" class="custom-select">
                                <option value="DDP">Dasar-Dasar Pemrograman</option>
                                <option value="BDI">Basis Data</option>
                                <option value="WEB1">Pemrograman Web</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
                            <div class="col-8">
                            <input id="text1" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
                            <div class="col-8">
                            <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                            <div class="col-8">
                            <input id="text3" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8 pt-2">
                            <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div><br>

                <?php
                    $proses = $_GET['proses'];
                    $nama_siswa = $_GET['nama'];
                    $mata_kuliah = $_GET['matkul'];
                    $nilai_uts = $_GET['nilai_uts'];
                    $nilai_uas = $_GET['nilai_uas'];
                    $nilai_tugas = $_GET['nilai_tugas'];

                    echo 'Proses : '.$proses;
                    echo '</br>Nama : '.$nama_siswa;
                    echo '</br>Mata Kuliah : '.$mata_kuliah;
                    echo '</br>Nilai UTS : '.$nilai_uts;
                    echo '</br>Nilai UAS : '.$nilai_uas;
                    echo '</br>Nilai Tugas Praktikum : '.$nilai_tugas;
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
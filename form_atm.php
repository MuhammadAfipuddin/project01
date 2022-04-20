<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ATM</h1>
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
                <form method="POST" action="form_atm.php">
                    <div class="form-group row">
                        <label for="norek" class="col-4 col-form-label">Nomor Rekening</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-sort-numeric-desc"></i>
                            </div>
                            </div> 
                            <input id="norek" name="norek" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Nama Customer</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                            </div> 
                            <input id="customer" name="customer" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="saldo" class="col-4 col-form-label">Saldo Awal</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-money"></i>
                            </div>
                            </div> 
                            <input id="saldo" name="saldo" type="text" class="form-control">
                        </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

                <?php
                    require_once "class_accountbank.php";

                    $ab1 = new AccountBank("C001",6000000,"Ahmad");
                    $ab2 = new AccountBank("C002",5350000,"Budi");

                    $ab2->transfer($ab1,500000);
                    $ar_ab = [$ab1,$ab2];

                    $_norek = $_POST['norek'];
                    $_customer = $_POST['customer'];
                    $_saldo = $_POST['saldo'];

                    $ab3 = new AccountBank($_norek,$_saldo,$_customer);
                    array_push($ar_ab,$ab3);

                ?>

                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th><th>No. Rekening</th><th>Customer</th><th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                            foreach($ar_ab as $obj){
                        ?>
                            <tr>
                                <td><?=$nomor?></td>
                                <td><?=$obj->nomor?></td>
                                <td><?=$obj->customer?></td>
                                <td><?=$obj->getSaldo()?></td>
                            </tr>
                        <?php
                            $nomor++;
                            }
                        ?>
                    </tbody>
                </table>

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


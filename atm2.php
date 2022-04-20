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
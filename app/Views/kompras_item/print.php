<!DOCTYPE html>
<html>

<head>
    <title>Relatoriu Kompras Item</title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
</head>

<body>

    <div class="card-header">
        <div style="text-align: center;">
            <h3>Nota Kompras Item</h3>
            <img src="<?= base_url(); ?>public/assets/img/lcon-mini-store.png" alt="Logo" height="100px" />
        </div>
    </div>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Kompras</th>
                <th>Naran Produtu</th>
                <th>Presu Modal</th>
                <th>Kuantidade</th>
                <th>SubTotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $totalBayar = 0;
            foreach ($kompras_item as $row):
                $subtotal = $row['presu_modal'] * $row['kuantidade'];
                $totalBayar += $subtotal;
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['kode_kompras'] ?></td>
                    <td style="text-align:left;"><?= $row['naran_produtu'] ?></td>
                    <td>$ <?= number_format($row['presu_modal'], 2, ".", ",") ?></td>
                    <td><?= $row['kuantidade'] ?></td>
                    <td>$ <?= number_format($subtotal, 2, ".", ",") ?></td>
                </tr>
            <?php endforeach; ?>
            <tr class="total-row">
                <td colspan="5">TOTAL SASAN KOMPRAS ITEM</td>
                <td>$ <?= number_format($totalBayar, 2, ".", ",") ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>


    <div class="signature">
        Assinatura,<br><br><br>
        ___________________
    </div>

    <script>
        window.onload = function() {
            window.print();
        };

        window.onafterprint = function() {
            // Redirect ke halaman CRUD produk/order
            window.location.href = "<?= base_url('kompras_item'); ?>";
        };
    </script>


</body>

</html>
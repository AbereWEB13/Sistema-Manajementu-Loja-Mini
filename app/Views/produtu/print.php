<!DOCTYPE html>
<html>

<head>
    <title>Relatoriu Vendas Item</title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
</head>

<body>

    <div class="card-header">
        <div style="text-align: center;">
            <h3>Nota Vendas Item</h3>
            <img src="<?= base_url(); ?>public/assets/img/lcon-mini-store.png" alt="Logo" height="100px" />
        </div>
    </div>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th class="text-center"> No
                </th>
                <th>Kode</th>
                <th>Produtu</th>
                <th>Kategoria</th>
                <th>Sub Kategoria</th>
                <th>Presu Modal</th>
                <th>Presu Vendas</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtu as $key => $row) : ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row['kode_produtu'] ?></td>
                    <td><?= $row['naran_produtu'] ?></td>
                    <td><?= $row['naran_kategoria'] ?></td>
                    <td><?= $row['naran_subkategoria'] ?></td>
                    <td><?= $row['presu_modal'] ?></td>
                    <td><?= $row['presu_vendas'] ?></td>
                    <td><?= $row['stok'] ?></td>
                </tr>
            <?php endforeach; ?>
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
            window.location.href = "<?= base_url('produtu'); ?>";
        };
    </script>
</body>

</html>
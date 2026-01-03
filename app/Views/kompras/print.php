<!DOCTYPE html>
<html>

<head>
    <title>Relatoriu Kompras </title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
</head>

<body>

    <div class="card-header">
        <div style="text-align: center;">
            <h3>Nota Kompras </h3>
            <img src="<?= base_url(); ?>public/assets/img/lcon-mini-store.png" alt="Logo" height="100px" />
        </div>
    </div>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Data kompras</th>
                <th>Fornesedor</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($kompras as $key => $row) : ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row['kode_kompras'] ?></td>
                    <td><?= $row['data_kompras'] ?></td>
                    <td><?= $row['naran_fornesedor'] ?></td>
                    <td><?= number_format($row['total'], 2, '.', ',') ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    </table>

    <br><br><br>

    <div class="signature">
        Assinatura,<br><br><br>
        ___________________
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
        window.onafterprint = function() {
            window.location.href = "<?= base_url('kompras'); ?>";
        };
    </script>

</body>

</html>
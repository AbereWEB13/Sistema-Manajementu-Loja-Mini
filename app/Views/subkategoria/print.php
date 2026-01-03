<!DOCTYPE html>
<html>

<head>
    <title>Relatoriu Sub Kateogoria </title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
</head>

<body>

    <div class="card-header">
        <div style="text-align: center;">
            <h3>Nota Sub Kateogoria </h3>
            <img src="<?= base_url(); ?>public/assets/img/lcon-mini-store.png" alt="Logo" height="100px" />
        </div>
    </div>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>Kategoria</th>
                <th>Sub Kategoria</th>
                <th>Deskrisaun</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($subkategoria as $key => $row) : ?>
                <tr>
                    <td><?= $row['naran_kategoria'] ?></td>
                    <td><?= $row['naran_subkategoria'] ?></td>
                    <td><?= $row['deskrisaun'] ?></td>

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
            window.location.href = "<?= base_url('subkategoria'); ?>";
        };
    </script>

</body>

</html>
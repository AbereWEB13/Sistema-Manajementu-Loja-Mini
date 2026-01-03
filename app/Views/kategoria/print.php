<!DOCTYPE html>
<html>

<head>
    <title>Relatoriu Kategoria </title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
</head>

<body>

    <div class="card-header">
        <div style="text-align: center;">
            <h3>Nota Kategoria </h3>
            <img src="<?= base_url(); ?>public/assets/img/lcon-mini-store.png" alt="Logo" height="100px" />
        </div>
    </div>

    <br><br>

    <table>
        <thead>
            <tr>
                <th class="text-center"> No
                </th>
                <th>Naran Kategoria</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($kategoria as $key => $row) : ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row['naran_kategoria'] ?></td>
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
            window.location.href = "<?= base_url('kategoria'); ?>";
        };
    </script>

</body>

</html>
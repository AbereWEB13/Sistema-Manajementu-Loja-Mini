<!DOCTYPE html>
<html>

<head>
    <title>Relatoriu Fornesedor </title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
</head>

<body>

    <div class="card-header">
        <div style="text-align: center;">
            <h3>Nota Fornesedor </h3>
            <img src="<?= base_url(); ?>public/assets/img/lcon-mini-store.png" alt="Logo" height="100px" />
        </div>
    </div>

    <br><br>

    <table>
        <thead>
            <tr>
                <th class="text-center"> No
                </th>
                <th>Naran Fornesedor</th>
                <th>Telemovel</th>
                <th>Email</th>
                <th>Enderesu</th>
                <th>Estatutu</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($fornesedor as $key => $row) : ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row['naran_fornesedor'] ?></td>
                    <td><?= $row['telemovel'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['enderesu'] ?></td>
                    <td><?= $row['estatutu'] ?></td>

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
            window.location.href = "<?= base_url('fornesedor'); ?>";
        };
    </script>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Relatoriu Kostumer </title>
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/print.css" />
</head>

<body>

    <div class="card-header">
        <div style="text-align: center;">
            <h3>Nota Kostumer </h3>
            <img src="<?= base_url(); ?>public/assets/img/lcon-mini-store.png" height="100px" />
        </div>
    </div>

    <br><br>

    <table>
        <thead>
            <tr>
                <th class="text-center"> No
                </th>
                <th>Naran Kostumer</th>
                <th>Email</th>
                <th>Numeru Telemovel</th>
                <th>Enderesu</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($kostumer as $key => $row) : ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row['naran_kostumer'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['telemovel'] ?></td>
                    <td><?= $row['enderesu'] ?></td>
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
            window.location.href = "<?= base_url('kostumer'); ?>";
        };
    </script>

</body>

</html>
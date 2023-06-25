<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Asisten Praktikum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333333;
            padding: 20px 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
        }

        th,
        td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333333;
            color: #ffffff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 5px;
            background-color: #333333;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .button-container a:hover {
            background-color: #555555;
        }
    </style>
</head>

<body>
    <h1>Pendaftaran Asisten Praktikum</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Praktikum</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($asisten as $a) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $a['NIM']; ?></td>
                    <td><?= $a['NAMA']; ?></td>
                    <td><?= $a['PRAKTIKUM']; ?></td>
                    <td><?= $a['IPK']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="button-container">
        <a href="/asisten/simpan">Tambah Data Asisten</a>
        <a href="/asisten/update">Edit Data Asisten</a>
        <a href="/asisten/delete">Hapus Data Asisten</a>
        <a href="/login">Logout</a>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }

        form input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #dddddd;
            border-radius: 3px;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #333333;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #555555;
        }

        h1 {
            text-align: center;
            color: #333333;
            margin-top: 20px;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <form action="/asisten/search" method="post">
        <?= csrf_field() ?>
        Search:<input type="text" name="key" /><br />
        <input type="submit" name="submit" value="Search" />
    </form>

    <?php
    if (!empty($hasil)) {
        echo "<h1>Hasil Pencarian </h1>";
        echo "<h2>Nama: " . $hasil['nama'] . "</h2>";
        echo "<h2>Praktikum: " . $hasil['praktikum'] . "</h2>";
        echo "<h2>IPK: " . $hasil['ipk'] . "</h2>";
    }
    ?>
</body>

</html>
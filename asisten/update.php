<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #dddddd;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #333333;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555555;
        }
    </style>
</head>

<body>
    <h1>UPDATE DATA ASISTEN</h1>
    <form action="/asisten/update" method="post">
        <?= csrf_field() ?>
        NIM:<input type="text" name="nim" /><br />
        NAMA:<input type="text" name="nama" /><br />
        PRAKTIKUM:<input type="text" name="praktikum" /><br />
        IPK:<input type="text" name="ipk" /><br />
        <input type="submit" name="" value="Update" />
    </form>
</body>

</html>
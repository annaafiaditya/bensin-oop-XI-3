<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"`>
    <title>bahan bakar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #d1d1d1;
        }

        .isi {
            background-color: #fff;
            width: 20%;
            height: 40%;
            border-radius: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        tr, td {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>

<body>
    <div class="isi">
        <form action="hasil.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="jumlah">Jumlah Liter: </label>
                        <input type="number" name="jumlah" id="jumlah" min=1 required placeholder="masukan">
                    </td>
                    <td>
                        <label for="jenis">Pilih BBM: </label>
                        <select name="jenis" id="jenis" required>
                            <!-- <option disabled hidden selected required>---</option>  -->
                            <option value="SSuper">Shell Super</option>
                            <option value="SVPower">Shell V-Power</option>
                            <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                            <option value="SVPowerNitro">Shell V-Power Nitro</option>
                    </td>
                </tr>
            </table>
            <button type="submit" name="kirim">Beli</button>
        <form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DISCORD NITRO</title>
    <link rel="stylesheet" href="home-style.css">
</head>

<body class="tengah">
    <h3>Pemesanan Discord Nitro</h3>
    <form action="crud.php" method="post" id="discord-form">
        <table>
            <tr>
                <td>Username : </td>
                <td>
                    <input id="username" name="username" type="text" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td>Password : </td>
                <td>
                    <input id="password" name="password" type="password" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td>Discord ID : </td>
                <td>
                    <input id="discord_id" name="discord_id" type="text" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td>List Nitro : </td>
                <td class="tr-price">
                    <input type="radio" name="price" value="1month">1 Month (Rp. 45,000) <br>
                    <input type="radio" name="price" value="3months">3 Months (Rp. 130,000) <br>
                    <input type="radio" name="price" value="1year">1 Year (Rp. 400,000)
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit" id="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
    <script src="cookies.js"></script>
</body>

</html>
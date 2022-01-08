<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: #CCFF66;">
    <section class="utama">
        <h1>Welcome to My Guestbook</h1>
        <a href="halaman1.php">Form GuestBook</a> |
        <a href="halaman3.php">View GuestBook</a>
        <hr>
        <form class="container-form" action="halaman2.php" method="POST">
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>message</td>
                    <td>:</td>
                    <td><textarea name="message" id="message" cols="40" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="simpan" name="proses"></td>
                    <td><input type="reset" value="reset" name="reset"></td>
                </tr>
            </table>
        </form>
    </section>
    <footer class="footer">
        <table>
            <tr>
                <td>Nama Kelompok :</td>
                <td>
                    <ol>
                        <li>Chirzien Muhammad Fauzan</li>
                        <li>Fauzan Adiwirawan</li>
                        <li>Sofian Indra Maulana</li>
                    </ol>
                </td>
            </tr>
        </table>
    </footer>
    
</body>
</html>
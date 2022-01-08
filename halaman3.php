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
    
    <?php
    include "conn.php";
    $ambildata = mysqli_query($koneksi, "SELECT*FROM tamu_tb ORDER BY id ASC");
    while($tampil=mysqli_fetch_array($ambildata)){
        echo "Posted : $tampil[posted]<br>";
        echo "Nama : $tampil[name]<br>";
        echo "Email : <a href=mailto:$tampil[email]>$tampil[email]</a><br>";
        echo "Message : $tampil[msg]<br>";
        echo "<hr size=1 width=100%>";
    }
    

    ?>
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
</body>
</html>
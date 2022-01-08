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
    $posted=date("Y-m-d");

    if(isset($_POST['proses'])){
        mysqli_query($koneksi, "INSERT INTO tamu_tb set
        posted='$posted',
        name = '$_POST[name]',
        email = '$_POST[email]',
        msg = '$_POST[message]'"
        );

        if(mysqli_affected_rows($koneksi)>0){
            echo "Thank you for signing up Guestbook...";
        }
        else{
            echo "Invalid Query!<br>Please register again...<br>";
        }
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
</html>
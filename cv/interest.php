<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Afifa</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <?php
        $nama_depan = "Afifa"
    ?>
    <header>
        <?php echo "Welcome to", " " . $nama_depan . "'s", " ", "page!" ?>
    </header>
    <div class="ovw">
        <?php
            $para_satu = "Bicara soal hobi &amp; interest, I have plenty of them. Should I make a list then? Wkwk. Lumayan banyak soalnya karena aku tipe orang yang gampang tertarik akan sesuatu tapi juga gampang jenuh.
            I am bad at sport actually. Tapi aku suka banget baca. I love to read anything. That's my ultimate thingy.
            Udah ah ya, yuk bikin list hobiku aja!";
            $para_dua = "List Hobi (oleh Afifa):
                <ul>
                    <li>Baca (e.g: buku, komik, tweets, quora)</li>
                    <li>Masak masakan simple</li>
                    <li>Dengerin Spotify</li>
                    <li>Nonton You-Tube (Fav channel : Ria SW &amp DancingBacons)</li>
                </ul>";
        ?>
        <img src="https://img.freepik.com/free-vector/focused-tiny-people-reading-books_74855-5836.jpg?size=626&ext=jpg&ga=GA1.2.1105230661.1677404644&semt=ais" alt="Ilustrasi Hobi" width="450px" height="380px">
        <h1> <?php echo "Interests &amp; Hobbies" ?> </h1>
        <p>
            <?php echo $para_satu ?>
        </p>
        <p>
            <?php echo $para_dua ?>
        </p>        
    </div>

    <p class="crm-btn">
        <a href="mainpage.php"> <?php echo "BACK" ?> </a>
    </p>
    <hr>

    <footer>
        <?php echo "Copyright &copy; 2023 by ". $nama_depan . ". All Rights Reserved." ?>
    </footer>

</body>
</html>
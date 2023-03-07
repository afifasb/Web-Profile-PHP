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
        $nama_depan = "Afifa";
    ?>
    <header>
        <?php echo "Welcome to", " " . $nama_depan . "'s", " ", "page!" ?>
    </header>
    <div class="ovw">
        <?php 
            $par_satu = "Halo! Namaku Afifa Salsabila. Saat ini aku sedang menempuh pendidikan sarjana di UPN Veteran Jawa Timur. Tebak dong aku jurusan apa? Hehehe.
            Ya, benar! Jurusan yang kuambil itu Teknik Informatika. Saat ini aku sudah mulai menjalani kehidupan mahasiswa semester 4.";
            $par_dua = "Deep down, I have such a huge interest about knowledges. I love to learn new things and figuring out how something works. Recently, I put a great amount of mind on Web Programming. Knowing more about technology is
            something that satisfied me. I kinda love to do math, so that's why my plan is to work more on data fields. Besides, I also get my eye on Internet of Things, but I am aware that my skills are a little bit lacking on that.
            So, that's why I want to explore more. Psstt, being a Woman in Tech is one of my greatest dream up until now!";
            $par_tiga = "Udah, ya. Segini aja buat Overview-nya. Make sure to visit my other pages too! Have a nice day!";
        ?>
        <img src="https://img.freepik.com/free-vector/illustration-female-character-wearing-hijab-working-office_10045-686.jpg?size=338&ext=jpg&ga=GA1.1.1105230661.1677404644&semt=sph" alt="Ilustrasi Diri" width="400px" height="400px">
        <h1> <?php echo "Overview" ?> </h1>
        <p>
            <?php echo $par_satu ?>
        </p>
        <p>
            <?php echo $par_dua ?>
        </p>
        <p>
        <?php echo $par_tiga ?>
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
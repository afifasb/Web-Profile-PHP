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
        <img src="https://img.freepik.com/free-vector/corporate-meeting-employees-cartoon-characters-discussing-business-strategy-planning-further-actions-brainstorming-formal-communication-seminar-concept-illustration_335657-2035.jpg?size=338&ext=jpg&ga=GA1.2.1105230661.1677404644&semt=ais" alt="Ilustrasi Kegiatan" width="450px" height="450px">
        <h1> <?php echo "Skills &amp; Experiences" ?> </h1>
        <table border="1">
            <tr style="background-color: rgb(145, 164, 194);">
                <td> <?php echo "Skills" ?> </td>
                <td> <?php echo "Experiences" ?> </td>
            </tr>
            <tr style="text-align: left; background-color: rgb(211, 217, 227);">
                <td>
                    <p> <?php echo "Some of " . $nama_depan . "'s Skills, including:" ?> </p>
                    <ol>
                        <li> <?php echo "English" ?> </li>
                        <li> <?php echo "Microsoft Word" ?> </li>
                        <li> <?php echo "Microsoft Excel" ?> </li>
                        <li style="padding-bottom: 10px;"> <?php echo "C, HTML, CSS, Java, Phyton Languages Programming" ?> </li>
                    </ol>
                </td>
                <td>
                    <p> <?php echo "Some of " . $nama_depan . "'s Experiences, including:" ?> </p>
                    <ol>
                        <li> <?php echo "Anggota Himpunan Jurusan Teknik Informatika (2022-Present)" ?> </li>
                        <li> <?php echo "Anggota UKM Debat Society UPNVJT (2021-Present)" ?> </li>
                        <li style="padding-bottom: 10px;"> <?php echo "Anggota Klub Debat WEF SMAN 1 Kepanjen (2017-2018)" ?> </li>
                    </ol>
                </td>                
            </tr>
        </table>     
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
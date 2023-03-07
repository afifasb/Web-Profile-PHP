<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Afifa's Web Profile</title>
</head>
<body>
    <?php 
        $nama_depan = "Afifa";
    ?>
   <header>
        <?php echo "Welcome to", " " . $nama_depan . "'s", " ", "page!" ?>
   </header>
   <div class="tengah">
        <img src="image/image1.jpg" alt="Foto Afifa" width="300px" height="300px">
        <?php
            $nama_lengkap = "AFIFA SALSABILA";
            $npm = "21081010130";
            $nama_kelas = "Pemrograman Web A081";
        ?>
        
        <p><?php echo $nama_lengkap ?></p>
        <p><?php echo $npm ?></p>
        <p>
            <?php
                $tanggal_lahir = new DateTime('4.2.2003'); //Tanggal lahir
                $current_date = new DateTime(date('m.d.y')); //Tanggal sekarang
                $umur = $current_date->diff($tanggal_lahir);
                echo ("$umur->y Tahun");
            ?>
        </p>
        <p><?php echo $nama_kelas ?></p>
   </div>
   <hr>

   <div class="about">
        <h1> <?php echo "About", " " . $nama_depan?> </h1>
        <p class="crm-btn">
            <a href="overview.php"> <?php echo "Overview" ?> </a>
        </p>
        <p class="crm-btn">
            <a href="interest.php"> <?php echo "Interests" ?> </a>
        </p>
        <p class="crm-btn">
            <a href="skills.php"> <?php echo "Skills" ?> </a>
        </p>
   </div>
   <hr>

   <div class="contact">
        <h1> <?php echo "Get to Know", " " . $nama_depan . " ", "More on"?> </h1>
        <p class="crm-btn">
            <a href="https://wa.me/085895869586"> <?php echo "WhatsApp" ?> </a>
        </p>
        <p class="crm-btn">
            <a href="https://www.instagram.com/afifasb/"> <?php echo "Instagram" ?> </a>
        </p>
        <p class="crm-btn">
            <a href="mailto:afifasals@gmail.com"> <?php echo "E-mail" ?> </a>
        </p>
        <p class="crm-btn">
            <a href="https://www.linkedin.com/in/afifa-salsabila-8657311a1?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BB7o9a0oERlKCLk9PDtGirg%3D%3D"> <?php echo "LinkedIn" ?> </a>
        </p>
   </div>
   <hr>

   <footer>
        <?php echo "Copyright &copy; 2023 by ". $nama_depan . ". All Rights Reserved." ?>
   </footer>
</body>
</html>
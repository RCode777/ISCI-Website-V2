<?php 
session_start();
if (!isset($_SESSION["level-8"])) {
    header("Location: level-8");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Team | Level 09</title>
    <link rel="shortcut icon" href="assets/img/isci.png" type="image/x-icon">

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/challenge.css">
    <link rel="stylesheet" href="node_modules/@sweetalert2/theme-borderless/borderless.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h1>Level 09</h1>
                    <div class="line"></div>
                    <br><br>
                    <p class="text-teal-400">Halo...baru baru ini ada kejadian seorang web developer bernama<b>
                            Silent-Coder</b> mengalami website
                        nya terkena hack dan login password nya juga di ubah. Si penyerang hanya meninggal kan
                        sebuah <a href="steganography.jpg" class="text-teal-100">Gambar ini</a>, bisakah kamu mencari
                        tahu password dan
                        username nya? pasti bisa dongg... kamu kan hengker pro :v </p>
                    <br><br>
                    <form action="" method="POST">
                        <input type="text" name="username" id="username" class="form-control" autocomplete="off"
                            placeholder="Username">
                        <br>
                        <input type="text" name="password" id="password" class="form-control" autocomplete="off"
                            placeholder="Password">
                        <br><br>
                        <button type="submit" name="submit" class="submit">Submit</button>
                    </form>
                    <br>
                    <p class="text-xl penjelasan text-teal-600">Teknik : <span
                            class="text-teal-100">Steganography</span></p>
                    <p class="text-xl penjelasan text-teal-600">Petunjuk : <span class="text-teal-100">View image source
                            code</span></p>

                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>


<?php 

if ( isset($_POST["submit"]) ) {

    
   $username = "Silent-Coder";
   $password = "3M+|S3TC2rq8'536";

   if ( $_POST["username"] == $username && $_POST["password"] == $password ) {
    $_SESSION["level-9"] = true;
    header("Location: level-10");
    exit;
   } else {
    echo "<script>
            Swal.fire({
            icon: `error`,
            title: `Yaahh...`,
            text: `Skill Steganography kamu kurang jago nih.. :)`,
            
            })
        </script>";
   }
}

?>


</html>
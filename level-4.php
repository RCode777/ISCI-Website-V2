<?php 
session_start();
if (!isset($_SESSION["level-3"])) {
    header("Location: level-3");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Team | Level 4</title>
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

                    <h1>Level 04</h1>
                    <div class="line"></div>
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
                    <p class="text-xl penjelasan text-teal-600">Teknik : <span class="text-teal-100">Information
                            Gathering</span></p>
                    <p class="text-xl penjelasan text-teal-600">Petunjuk : <span class="text-teal-100">Wrong
                            Answer</span></p>

                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<?php 

if ( isset($_POST["submit"]) ) {

    
   $username = "$@0gFS*gQ~V2*v1k";
   $password = "NDE3QCh59Vr9Ie2O";

   if ( $_POST["username"] == $username && $_POST["password"] == $password ) {
    $_SESSION["level-4"] = true;
    header("Location: level-5");
    exit;
   } else {
    echo "<script>
            Swal.fire({
            icon: `error`,
            title: `Yaahh...`,
            text: `Skill Information Gathering kamu kurang jago nih.. :)`,
            footer: `<p style='opacity: 0.1; color: black;'>Username : $@0gFS*gQ~V2*v1k || Password : NDE3QCh59Vr9Ie2O</p>`,
            })
        </script>";
   }
}

?>


</html>
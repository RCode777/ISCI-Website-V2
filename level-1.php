<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Team | Level 1</title>
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
                    <p style="color: #0c1220;">Password : 4}580pCVi*e6G9hu</p>
                    <h1>Level 01</h1>
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
                    <p class="text-xl penjelasan text-teal-600">Petunjuk : <span class="text-teal-100">View Page
                            Source</span></p>
                    <p style="color: #0c1220;">Username : [RlS/R?5WI40!1L|</p>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<?php 

if ( isset($_POST["submit"]) ) {
    session_start();
    
   $username = "[RlS/R?5WI40!1L|";
   $password = "4}580pCVi*e6G9hu";

   if ( $_POST["username"] == $username && $_POST["password"] == $password ) {
    $_SESSION["level-1"] = true;
    header("Location: level-2");
    exit;
   } else {
    echo "<script>
            Swal.fire({
            icon: 'error',
            title: 'Yaahh...',
            text: 'Skill Information Gathering kamu kurang jago nih.. :)',
            })
        </script>";
   }
}

?>

</html>
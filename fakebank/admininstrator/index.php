<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Team | Level 13</title>
    <link rel="shortcut icon" href="../assets/img/isci.png" type="image/x-icon">

    <!-- My CSS -->
    <link rel="stylesheet" href="../node_modules/@sweetalert2/theme-borderless/borderless.css">

    <style>
    @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=IBM+Plex+Mono:wght@100&family=Inconsolata:wght@200;300&family=Koulen&family=Quicksand:wght@300&family=Roboto+Mono:wght@100&display=swap");

    body {
        background-color: #0c1220 !important;
        font-family: "Inconsolata", monospace !important;
    }

    .form {
        margin-top: 7%;
    }

    .form h1 {
        font-size: 4em;
        color: aqua;
    }

    .line {
        height: 3px;
        background-color: white;
        width: 15em;
    }

    .form input {
        background-color: #262a35;
        border-radius: 5px;
        border: 2px solid aqua;
    }

    .form input:focus {
        background-color: #262a35 !important;
        color: aqua;
    }

    .submit {
        transition: 0.4s;
        border: 1px solid aqua !important;
        color: aqua;
        font-weight: bold;
        padding: 20px 80px 20px 80px;
        font-size: 20px;
        font-weight: bold;
        border-radius: 10px;
    }

    .submit:hover {
        border: 1px solid white !important;
        color: #0c1220;
        background-color: aqua;
    }
    </style>

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

                    <h1>Level 13</h1>
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
                    <p class="text-xl penjelasan text-teal-600">Teknik : <span class="text-teal-100">SQL
                            Injection</span></p>
                    <p class="text-xl penjelasan text-teal-600">Petunjuk : <span class="text-teal-100">Bypass Admin
                            Login</span>
                    </p>

                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>


<?php 

require "koneksi.php";

if ( isset($_POST["submit"]) ) {
    
   $username = $_POST["username"];
   $password = $_POST["password"];

   $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");
   
   $result = mysqli_fetch_array($query);


   if ($result) {
    echo "<script>
    Swal.fire({ title: `Mantap!`,
                text: `SQL Injection kamu berhasil!`, 
                icon: `success`,
                footer: `<a href='yay' style='padding: 10px; background-color: aqua; color: white; border: box-shadow: 0 0 0 3px transparent; border-radius: 10px;' class='btn btn-primary'><i class='fa-solid fa-play'></i> Continue</a>`
            
            });

</script>";
} else {
  echo "<script>
            Swal.fire({
            icon: 'error',
            title: 'Yaahh...',
            text: 'Skill SQL Injection kamu kurang jago nih.. :)'
            });
        </script>";
}
}

?>


</html>
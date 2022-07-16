<?php 
session_start();
if (!isset($_SESSION["level-6"])) {
    header("Location: level-6");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Team | Level 7</title>
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

                    <h1>Level 07</h1>
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
                    <p class="text-xl penjelasan text-teal-600">Teknik : <span class="text-teal-100">Cryptography</span>
                    </p>
                    <p class="text-xl penjelasan text-teal-600">Petunjuk : <span class="text-teal-100">View Page
                            Source</span></p>

                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<script>
var user =
    "081 048 056 075 097 073 121 067 111 090 074 070 075 119 085 100 102 102 100 107 071 049 122 120 055 079 114 055 067 089 054 086 075 051 100 043 047 101 116 050 103 065 103 061";
var password =
    "114 099 088 122 047 116 112 088 089 107 077 102 054 071 067 112 070 109 110 079 069 103 120 098 069 112 050 086 109 080 067 071 103 098 119 074 054 052 089 090 069 085 099 061";
</script>

<?php 

if ( isset($_POST["submit"]) ) {
   $username = "fA#q6;6%[1HV#8jq";
   $password = "FjY~r8~LKlM?a5c7";

   if ( $_POST["username"] == $username && $_POST["password"] == $password ) {
    $_SESSION["level-7"] = true;
    header("Location: level-8");
    exit;
   } else {
    echo "<script>
            Swal.fire({
            icon: `error`,
            title: `Yaahh...`,
            text: `Skill Information Gathering kamu kurang jago nih.. :)`,
            
            })
        </script>";
   }
}

?>


</html>
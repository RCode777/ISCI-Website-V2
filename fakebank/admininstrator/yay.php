<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeBank Dashboard | ISCI Challenge</title>
    <link rel="shortcut icon" href="../assets/img/isci.png" type="image/x-icon">

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body>


    <section id="header">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>FakeBank Dashboard</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="ch">
                            <h5>Hacking Challenge</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="header2">
        <div class="header2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Admin Account</h5>
                        <p>Transfer money to other account</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <center>
        <div class="card" style="height: 30rem;">
            <div class="card-body">
                <form action="" method="POST">
                    <h5 class="card-title">Admin Portal</h5>
                    <?php 
    
    if ( isset($_POST["submit"]) ) {
        
        $sendFrom = $_POST["sendFrom"];
        $sendTo = $_POST["sendTo"];
        $sendTotal = $_POST["sendTotal"];

        if ( $sendFrom == "87654" && $sendTo == "12345" && $sendTotal == "20.000.000" ) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> money has been transferred<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

            echo "<a href='../certificate/' class='btn btn-success shadow-lg'>Get your certificate</a> <br><br>";
           
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Failed!</strong> Inputan harus sesuai dengan petunjuk!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    ?>
                    <label for="sendFrom">Send From</label>
                    <input type="text" class="form-control" id="sendFrom" name="sendFrom"
                        placeholder="Bank Account Number" required>
                    <br>
                    <label for="sendTo">Send To</label>
                    <input type="text" class="form-control" id="sendTo" name="sendTo" placeholder="Bank Account Number"
                        required>
                    <br>
                    <label for="sendTotal">Account to send in RUPIAH</label>
                    <input type="text" class="form-control" id="sendTotal" name="sendTotal"
                        placeholder="Amount of Money" required>
                    <br>
                    <button class="btn btn-primary transfer" type="submit" name="submit">Transfer</button>
                </form>

            </div>
        </div>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>


</body>

</html>
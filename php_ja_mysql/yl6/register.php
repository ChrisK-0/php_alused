<?php include('config.php');?>
<?php

$usr = "";
$psw = "";

$name_error = "This username is taken";

if (!empty($_GET['usr']) && !empty($_GET['psw'])) {

    $usr = htmlspecialchars(trim($_GET['usr']));
    $psw = htmlspecialchars(trim($_GET['psw']));

    $salt = 'taiestisuvalinetekst';
    $pwCrypt = crypt($psw, $salt);

    $doubleUser = "select kasutaja FROM kasutajad where kasutaja='$usr'";
    $doubleUser_result = mysqli_query($conn, $doubleUser);

    if (mysqli_num_rows($doubleUser_result) > 0) {

        echo $name_error;

        } else {

        $insertUser = "INSERT INTO kasutajad(kasutaja, parool) VALUES ('$usr', '$pwCrypt')";
        $result = mysqli_query($conn, $insertUser);

        $_SESSION['tuvastamine'] = 'misiganes';
        header('Location: login.php');
        exit();

        }
    }
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<title>Register</title>
</head>
<body>
<div class="container">
    <h1>Register</h1>
    <form action="" method="get" class="needs-validation" novalidate>

        <label for="usr"><b>Username</b></label><br>
        <input type="text" placeholder="Enter username" name="usr" id="usr" required class="form-control" pattern="[A-Za-z].{2,}"><br>

        <label for="psw"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required class="form-control" pattern=".{3,}" title="Eight or more characters"><br><br>

        <button type="submit">Register</button>
        <span name="span_error"></span>

    </form>
    <button> <a href="login.php">Kasutaja juba olemas? <b>Logi sisse</b></a> </button>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

</body>
</html>

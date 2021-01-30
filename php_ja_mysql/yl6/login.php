<?php include('config.php');?>
<?php
session_start();
if (isset($_SESSION['tuvastamine'])) {
    header('Location: admin.php');
    exit();
}
//kontrollime kas väljad on täidetud
if (!empty($_POST['login']) && !empty($_POST['pass'])) {
    // v2ljade trim
    $login = htmlspecialchars(trim($_POST['login']));
    $pass = htmlspecialchars(trim($_POST['pass']));
    //SIIA UUS KONTROLL
    $sool = 'taiestisuvalinetekst';
    $kryp = crypt($pass, $sool);
    //kontrollime kas andmebaasis on selline kasutaja ja parool
    $paring = "SELECT * FROM kasutajad WHERE kasutaja='$login' AND parool='$kryp'";
    $valjund = mysqli_query($conn, $paring);
    //kui on, siis loome sessiooni ja suuname
    if (mysqli_num_rows($valjund)==1) {
        $_SESSION['tuvastamine'] = 'misiganes';
        header('Location: admin.php');
    } else {
        echo "kasutaja või parool on vale";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container">

<h1>Login</h1>
<form action="" method="post">

    <label for="usr"><b>Username</b></label><br>
    <input type="text" placeholder="Enter username" name="login" required class="form-control"><br>


    <label for="pass"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="pass" required class="form-control"><br><br>


    <button type="submit">Login</button>

</form>
    <button type="button"> <a href="register.php">Pole kasutajat? <b>Registreerige siin</b></a> </button>

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
<?php include('config.php');?>

<?php

if (!empty($_GET['usr']) && !empty($_GET['psw'])){

    $usr = htmlspecialchars(trim($_GET['usr']));
    $psw = htmlspecialchars(trim($_GET['psw']));

    $sool = 'taiestisuvalinetekst';
    $kryp = crypt($psw, $sool);

    $doubleUser = "select kasutaja FROM kasutajad where kasutaja='$usr';";
    $userControl = mysqli_query($conn, $doubleUser);

    $rowcount=mysqli_num_rows($userControl);

    //päringu vastuste arv
    $tulemus = mysqli_affected_rows($conn);
    if ($tulemus == 1) {
        echo "Syntax successful".'<br>';

        $rowcount=mysqli_num_rows($userControl);
        printf("Result set has %d rows.\n",$rowcount);

    } else {
        echo "Error: Syntax".'<br>';
    }

    if (mysqli_num_rows($userControl) <=> 0) {
        //päring
        $paring = "INSERT INTO kasutajad(kasutaja, parool) VALUES ('".$usr."', '".$kryp."')";
        $valjund = mysqli_query($conn, $paring);
        echo 'Registered successfully'.'<br>';

        $rowcount=mysqli_num_rows($userControl);
        printf("Result set has %d rows.\n",$rowcount);

    } else {
        echo 'This username already exists!'.'<br>';

        /*
        $_SESSION['tuvastamine'] = 'misiganes';
        header('Location: login.php');
        */
    }
}

?>

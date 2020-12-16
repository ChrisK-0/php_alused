<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4 dokumenti</title>
    <link rel="stylesheet" href="yl10.css">
</head>
<body>
<ul class="menu">
    <!--  dynaamiline lehe sirvimise menyy -->
    <li><a href="yl10.php">Avaleht</a></li>
    <li><a href="yl10.php?leht=portfoolio">Portfoolio</a></li>
    <li><a href="yl10.php?leht=kaart">Kaart</a></li>
    <li><a href="yl10.php?leht=kontakt">Kontakt</a></li>
<ul>
        <!-- // turvalisuse kontroll -->
        <?php
        if(!empty($_GET['leht'])){
            $leht = htmlspecialchars($_GET['leht']);
            $lubatud = array('portfoolio','kaart','kontakt');
            $kontroll = in_array($leht, $lubatud);
            if ($lubatud) {
                include($leht.'.php');
            } else {
                // turvalisuse kontrolli s6num
                echo 'Valitud lehte ei eksisteeri!';
            }
        } else {
        ?>
            <h2>Avaleht</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non lacus dapibus, ullamcorper tortor id, rutrum nunc. Vivamus posuere suscipit ligula a porttitor. Sed iaculis ullamcorper ante nec pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ultrices pharetra lectus sit amet posuere. Nulla ornare quam nec dignissim tincidunt. Nunc egestas interdum lacus. Donec est ante, porttitor eget urna at, eleifend efficitur leo. Aliquam non sollicitudin est. Praesent in leo pulvinar, malesuada lacus eu, sollicitudin lorem. Integer sed varius turpis. Nullam sollicitudin mattis orci sit amet fringilla. Curabitur efficitur purus in eros faucibus aliquet. Suspendisse rutrum finibus orci, nec suscipit tellus iaculis et.</p>
        <?php
        }
        ?>
</body>
</html>
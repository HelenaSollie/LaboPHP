<?php include_once 'products.inc.php'; ?>

<div>
    <h2>In mandje: </h2>
    <?php

    if(!empty($_SESSION['mandje'])){

        $sessieId = $_SESSION['mandje'];

        $aantal = count($_SESSION['mandje']);

        for($pid = 0; $pid < $aantal; $pid++){

            $huidigP = $_SESSION['mandje'][$pid];
            $huidigeNaam = $products[$huidigePid]['mandje'];

            echo "<li>Product : " . $huidigeNaam . "</li>";
        }
    }
    else{
        echo "<p>Mandje is leeg!</p>";
    }
    ?>
</div>
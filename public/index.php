<?php

require_once '../pages/header.php';
//require_once '../BDD/connexion.php';

if ($dbh){
    if (isset($_GET["pages"])) {
        switch ($_GET["pages"]) {
            case "acceuil":require_once '../pages/acceuil.php';
                break;
            default:require_once '../pages/404.php';
                break;
        }
    } else {
        require_once '../pages/acceuil.php';}

} else {echo 'site en maintenance';}
require_once '../pages/footer.php';
?>
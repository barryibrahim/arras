<?php

require_once '../pages/header.php';
//require_once '../BDD/connexion.php';

//if ($dbh){
if (isset($_GET["pages"])) {
    switch ($_GET["pages"]) {
        case "acceuil":require_once '../pages/acceuil.php';
            break;
        case "legal_mention":require_once '../pages/lm.php';
            break;
        case "login":require_once '../pages/login.php';
            break;
        case "signup":require_once '../pages/signup.php';
            break;
        case "contact":require_once '../pages/contact.php';
            break;
        default:require_once '../pages/404.php';
            break;
    }
} else {
    require_once '../pages/acceuil.php';
}

//} else {echo 'site en maintenance';}
require_once '../pages/footer.php';

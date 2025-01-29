<?php
require_once '../pages/header.php';
require_once '../DTB/connect.php';

if ($dbh){
    if (isset($_GET["pages"])) {
        switch ($_GET["pages"]) {
            case "lobby":require_once '../pages/lobby.php';
                break;
            case "legal_mention":require_once '../pages/lm.php';
                break;
            case "login":require_once '../pages/login.php';
                break;
            case "signup":require_once '../pages/signup.php';
                break;
            case "contact":require_once '../pages/contact.php';
                break;
            case "history":require_once '../pages/history.php';
                break;
            case "monuments":require_once '../pages/monument.php';
                break;
            case "events":require_once '../pages/events.php';
                break;
            case "liste_contact":require_once '../pages/liste_contact.php';
                break;
            default:require_once '../pages/404.php';
                break;
        }
    } else {
        require_once '../pages/lobby.php';
    }
} else {echo 'site en maintenance';}
require_once '../pages/footer.php';

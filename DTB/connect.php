<?php
require_once 'id.php';
try {
    $dbh = new PDO('mysql:host='.$serveur.';dbname='.$bd,$login,$password);
    $user_mail = "";
} catch (PDOException $e) {
    $dbh = null;
    // attempt to retry the connection after some timeout for example
}
?>
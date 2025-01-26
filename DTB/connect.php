<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=ARRAS', 'login5650', "QyLUyZKRlSDLhhV");
} catch (PDOException $e) {
    $dbh = null;
    // attempt to retry the connection after some timeout for example
}
?>
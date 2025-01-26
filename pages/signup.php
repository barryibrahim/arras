<form method="POST">
    <br/><br/><h1>Créaction de votre compte :</h1><br/>
    <h5>e-mail :</h5>
    <input type="email" id="email" name="email" placeholder="Entrez votre e-mail :"/><br/><br/>
    <h5>Nom :</h5>
    <input type="text" id="name" name="name" placeholder="Entrez votre nom :"/><br/><br/>
    <h5>Prenom :</h5>
    <input type="text" id="fname" name="fname" placeholder="Entrez votre prénom :"/><br/><br/>
    <h5>Mot de passe :</h5>
    <input type="password" id="password" name="password" placeholder="entrez votre mot de passe :"/><br/><br/>
    <h5>Date de naissance :</h5>
    <input type="date" id="birthdate" name="birthdate" placeholder="Entrez votre date de naissance :"/><br/><br/>
    <h5>Ville :</h5>
    <input type="text" id="city" name="city" placeholder="Entrez votre ville :"/><br/><br/>
    <h5>Code postal :</h5>
    <input type="text" id="zip" name="zip" placeholder="Entrez votre code postal :"/><br/><br/>
    <h5>Numéro de rue :</h5>
    <input type="text" id="road" name="road" placeholder="Entrez votre rue:"/><br/><br/>
    <h5>Numéro de telephone :</h5>
    <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro :"/>
    <input type="submit" id="submit" name="submit" value="Envoyer ma demande"/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</form>


<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $road = $_POST['road'];
    $phone = $_POST['phone'];

    if (empty($name)) {
        echo "Vous avez oublié de saisir votre nom";
    } elseif (empty($fname)) {
        echo "Vous avez oublié de saisir votre prénom";
    } elseif (empty($email)) {
        echo "Vous avez oublié votre mail";
    } elseif (empty($password)) {
        echo "Vous avez oublié de votre mot de passe";
    } elseif (empty($birthdate)) {
        echo "Vous n'avez pas votre date de naissance";
    } elseif (empty($city)) {
        echo "Vous avez oublié votre ville";
    } elseif (empty($zip)) {
        echo "Vous devez mettre votre votre code postal";
    } elseif (empty($road)) {
        echo "Vous devez mettre votre rue";
    } elseif (empty($phone)) {
        echo "Vous devez mettre votre numéro";
    } else {
        $stmt = $dbh->prepare("INSERT INTO inscription (name,fname,email,password,birthdate,city,zip,road,phone) VALUES (:name,:fname,:email,:password,:birthdate,:city,:zip,:road,:phone)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':birthdate', $birthdate);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':zip', $zip);
        $stmt->bindParam(':road', $road);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
        echo "Votre prise d'information a bien été prise en compte.<br>";
    }

}

?>
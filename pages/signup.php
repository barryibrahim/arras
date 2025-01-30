<form method="POST">
    <br/><br/><h1>Création de votre compte :</h1><br/>
    <h5>e-mail :</h5>
    <input type="email" id="email" name="email" placeholder="Entrez votre e-mail :"/><br/><br/>
    <h5>Nom :</h5>
    <input type="text" id="user_name" name="user_name" placeholder="Entrez votre nom :"/><br/><br/>
    <h5>Prenom :</h5>
    <input type="text" id="user_fname" name="user_fname" placeholder="Entrez votre prénom :"/><br/><br/>
    <h5>Mot de passe :</h5>
    <input type="password" id="user_password" name="user_password" placeholder="entrez votre mot de passe :"/><br/><br/>
    <h5>Date de naissance :</h5>
    <input type="date" id="birthdate" name="birthdate" placeholder="Entrez votre date de naissance :"/><br/><br/>
    <h5>Ville :</h5>
    <input type="text" id="city" name="city" placeholder="Entrez votre ville :"/><br/><br/>
    <h5>Code postal :</h5>
    <input type="text" id="zip" name="zip" placeholder="Entrez votre code postal :"/><br/><br/>
    <h5>Nom de rue :</h5>
    <input type="text" id="road" name="road" placeholder="Entrez votre rue:"/><br/><br/>
    <h5>Numero de rue :</h5>
    <input type="number" id="nroad" name="nroad" placeholder="Entrez votre numéro de rue:"/><br/><br/>
    <h5>Numéro de telephone :</h5>
    <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro :"/>
    <input type="submit" id="submit" name="submit" value="Envoyer ma demande"/>
</form>


<?php

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $user_fname = $_POST['user_fname'];
    $user_password = $_POST['user_password'];
    $birthdate = $_POST['birthdate'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $road = $_POST['road'];
    $nroad = $_POST['nroad'];
    $phone = $_POST['phone'];

    if (empty($user_name)) {
        echo "Vous avez oublié de saisir votre nom";
    } elseif (empty($user_fname)) {
        echo "Vous avez oublié de saisir votre prénom";
    } elseif (empty($email)) {
        echo "Vous avez oublié votre mail";
    } elseif (empty($user_password)) {
        echo "Vous avez oublié de votre mot de passe";
    } elseif (empty($birthdate)) {
        echo "Vous n'avez pas votre date de naissance";
    } elseif (empty($city)) {
        echo "Vous avez oublié votre ville";
    } elseif (empty($zip)) {
        echo "Vous devez mettre votre votre code postal";
    } elseif (empty($road)) {
        echo "Vous devez mettre votre rue";
    } elseif (empty($nroad)) {
        echo "Vous devez mettre votre numéro de rue";
    } elseif (empty($phone)) {
        echo "Vous devez mettre votre numéro";
    } else {
        try{
            $stmt = $dbh -> prepare("SELECT email FROM signup WHERE email=:email");
            $stmt ->bindParam(':email',$email);
            $stmt ->execute();
            $list = $stmt->fetch();
            if ($list!==false){
                echo '<br/> Cet e-mail est dejà utilisé, merci de réessayer avec un autre.';
            }else{
                $stmt = $dbh->prepare("INSERT INTO signup (email,user_name,user_fname,user_password,birthdate,city,zip,road,nroad,phone) VALUES (:email,:user_name,:user_fname,:user_password,:birthdate,:city,:zip,:road,:nroad,:phone)");
                $stmt ->bindParam(':email',$email);
                $stmt ->bindParam(':user_name',$user_name);
                $stmt ->bindParam(':user_fname',$user_fname);
                $stmt ->bindParam(':user_password',$user_password);
                $stmt ->bindParam(':birthdate',$birthdate);
                $stmt ->bindParam(':city',$city);
                $stmt ->bindParam(':zip',$zip);
                $stmt ->bindParam(':road',$road);
                $stmt ->bindParam(':nroad',$nroad);
                $stmt ->bindParam(':phone',$phone);
                $stmt ->execute();
                echo "<br/>Vos information ont bien été prisent en compte.";
            }
        } catch (Exception $e){
                echo 'Problème de connexion avec notre base de donnée. Essayez plus tard.';
        }
    }

}

?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
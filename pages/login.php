<form method="POST">
    <br/><br/><h1>Connection :</h1><br/>
    <h5>e-mail :</h5>
    <input type="email" id="email" name="email" placeholder="Entrez votre e-mail :"><br/><br/>
    <h5>password :</h5>
    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe :"> 
    <input type="submit" id="connect" name="connect" value="Se connecter"/>
</form>

<?php
$email = "";
$nom = "";
$prenom = "";
$sujet = "";
$contenu = "";

if (isset($_POST["connect"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    if (empty($email)) {
        echo 'entrez votre email';
    } elseif (empty($password)) {
        echo 'entrez votre mot de passe';
    } else {
        $stmt = $dbh -> prepare("SELECT email, user_password FROM signup WHERE email=:email");
        $stmt ->bindParam(':email',$email);
        $stmt ->execute();
        $list = $stmt->fetchAll();
        var_dump($list);
        echo '<br/> mot de passe dtb = '.$list[0]["user_password"];
        echo '<br/> mot de passe user = '.$password;
        if ($list[0]["user_password"]==$password){
            echo '<br/> connecté en tant que '.$email.'. <br/> mot de passe : '.$password.'.';
        }else{
            echo '<br/> votre email ou mot de passe est incorrect';
        }
        
    }
}
?>
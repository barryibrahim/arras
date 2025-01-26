<form method="POST">
    <br/><br/><h1>Contactez-nous :</h1><br/>
    <h5>e-mail :</h5>
    <input type="email" id="email" name="email"placeholder="Entrez votre e-mail :"> <br/><br/>
    <h5>nom :</h5>
    <input type="text" id="name" name="name" placeholder="Entrez votre nom :"> <br/><br/>
    <h5>prenom :</h5>
    <input type="text" id="fname" name="fname" placeholder="Entrez votre prenom :"> <br/><br/>
    <h5>sujet :</h5>
    <input type="text" id="subject" name="subject" placeholder="Entrez votre sujet :"> <br/><br/>
    <h5>contenu :</h5>
    <textarea type="test" id="content" name="content" placeholder="Entrez votre message :"> </textarea> <br/><br/>
    <input type="submit" id="send" name="send" value="Envoyer"/>
</form>

<?php

$email = "";
$name = "";
$fname = "";
$subject = "";
$content = "";

if (isset($_POST["send"])) {
    $email = $_POST["email"];
    $name = $_POST["name"];
    $fname = $_POST["fname"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    if (empty($email)) {
        echo 'entrez votre email';
    } elseif (empty($name)) {
        echo 'entrez votre nom';
    } elseif (empty($fname)) {
        echo 'entrez votre prenom';
    } elseif (empty($subject)) {
        echo 'entrez votre sujet';
    } elseif (empty($content)) {
        echo 'entrez votre message';
    } else {
    //    $stmt = $dbh->prepare("INSERT INTO contact (name,fname,email,subject,content) VALUES (:name,:fname,:email,:subject,:content)");
    //    $stmt ->bindParam(':name',$name);
    //    $stmt ->bindParam(':fname',$fname);
    //    $stmt ->bindParam(':email',$email);
    //    $stmt ->bindParam(':subject',$subject);
    //    $stmt ->bindParam(':content',$content);
    //    $stmt ->execute();
        echo '<br/> merci ' . $name . ' ' . $fname . ' pour votre message.';
    }
}

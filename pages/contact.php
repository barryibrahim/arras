<br/><br/><h1>Contactez-nous :</h1><br/>
<form method="POST">
    <h5>e-mail :</h5>
    <input type="email" id="email" name="email"placeholder="Entrez votre e-mail :"> <br/><br/>
    <h5>nom :</h5>
    <input type="text" id="user_name" name="user_name" placeholder="Entrez votre nom :"> <br/><br/>
    <h5>prenom :</h5>
    <input type="text" id="user_fname" name="user_fname" placeholder="Entrez votre prenom :"> <br/><br/>
    <h5>sujet :</h5>
    <input type="text" id="subject" name="subject" placeholder="Entrez votre sujet :"> <br/><br/>
    <h5>contenu :</h5>
    <textarea type="test" id="content" name="content" placeholder="Entrez votre message :"> </textarea> <br/><br/>
    <input type="submit" id="send" name="send" value="Envoyer"/>
</form>

<?php

$email = "";
$user_name = "";
$user_fname = "";
$subject = "";
$content = "";

if (isset($_POST["send"])) {
    $email = $_POST["email"];
    $user_name = $_POST["user_name"];
    $user_fname = $_POST["user_fname"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    if (empty($email)) {
        echo 'entrez votre email';
    } elseif (empty($user_name)) {
        echo 'entrez votre nom';
    } elseif (empty($user_fname)) {
        echo 'entrez votre prenom';
    } elseif (empty($subject)) {
        echo 'entrez votre sujet';
    } elseif (empty($content)) {
        echo 'entrez votre message';
    } else {
        $stmt = $dbh->prepare("INSERT INTO contact (user_name,user_fname,email,subject,content) VALUES (:user_name,:user_fname,:email,:subject,:content)");
        $stmt ->bindParam(':user_name',$user_name);
        $stmt ->bindParam(':user_fname',$user_fname);
        $stmt ->bindParam(':email',$email);
        $stmt ->bindParam(':subject',$subject);
        $stmt ->bindParam(':content',$content);
        $stmt ->execute();
        echo '<br/> merci ' . $user_name . ' ' . $user_fname . ' pour votre message.';
    }
}
?>   
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
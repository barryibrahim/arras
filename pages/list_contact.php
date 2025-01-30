<br/><br/><h1>Liste des contacts : </h1><br/>

<p>Cette page est accessible uniquement pour l'administrateur <br/>
<form method="POST">
    <h5>login<h5>
    <input type="text" id=user_login name=user_login placeholder="login :" >
    <h5>mot de passe<h5>
    <input type="password" id=user_password name=user_password placeholder="mot de passe :" >
    <input type="submit" id="send" name="send" value="Se connecter"><br/>
    
</form>

<?php
require_once "../DTB/id.php";

$user_login = "";
$user_password = "";

if (isset($_POST["send"])) {
  $user_login = $_POST["user_login"];
  $user_password = $_POST["user_password"];


  if (empty($user_login)) {
      echo 'entrez le login';
  } elseif (empty($user_password)) {
      echo 'entrez le mot de passe';
  } else{
      if ($login === $user_login && $password === $user_password){
          ?>
          <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">nom</th>
              <th scope="col">prenom</th>
              <th scope="col">email</th>
              <th scope="col">sujet</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          $stmt = $dbh -> prepare("SELECT user_name, user_fname,email,subject,content FROM contact");
          $stmt ->execute();
          $list = $stmt->fetchAll();
          foreach ($list as $row){
              echo '<tr class="table-dark">';
              echo '<td>'.$row["user_fname"].'</td><td>'.$row["user_name"].'</td><td>'.$row["email"].'</td><td>'.$row["subject"].'</td>';
              echo "</tr>";
          }
          ?>
            </tbody>
          </table>
          <?php
      }else{
        echo "<br/>Vous devez être l'administrateur pour avoir accès a cette partie du site.";
      }
  }
}
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


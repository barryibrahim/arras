<?php
echo "Liste des contacts";
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
<?php
include('connect.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary my-5">
        <a href="index.php" class="text-light">
          Ajouter une tâche
        </a>
        </button>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Priorité</th>
        <th scope="col">Date d'échéance</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Opérations</th>
      </tr>
    </thead>
    <tbody>


      <?php
      $sql = "SELECT t.id as id, t.nom, t.priorite, t.date_echeance as echeance, c.nom as categorie FROM taches t INNER JOIN categorie c ON t.categorie_id = c.id; ";
      $result = mysqli_query($conn, $sql);
      if($result){
       while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $nom = $row['nom'];
        $priorite = $row['priorite']; 
        $date_echeance = $row['echeance'];
        $categorie = $row['categorie'];
        echo '<tr>
        <td>'.$nom.'</td>
        <td>'.$priorite.'</td>
        <td>'.$date_echeance.'</td>
        <td>'.$categorie.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid'.$id.'" class="text-light">Modifier</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Supprimer</a></button>
      </td>
      </tr>';
       }
      }
      ?>

  </tbody>
</table>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
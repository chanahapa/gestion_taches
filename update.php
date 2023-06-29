<?php
include 'connect.php';
if(isset($_POST['valider'])){
    $name = $_POST['nom'];
    $priorite = $_POST['priorite'];
    $date_echeance = $_POST['date_echeance'];
    $categorie = $_POST['categorie'];

    $sql = "UPDATE taches SET nom='$name', priorite='$priorite', date_echeance='$date_echeance', categorie_id='$categorie'";
    $result = mysqli_query($conn, $sql);
    if ($result){
        header('location:taches.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <div class="container my-5">
        <div class="row">
            <form method="post">
                <h3>Modifier une tâche</h3>
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" autocomplete="off" placeholder="Entrez le nom de la tâche">
                </div>

                <div class="mb-3">
                    <label class="form-label">Priorité</label>
                    <select name="priorite" id="priorite" class="form-select">
                    <option value="Haute">Haute</option>
                    <option value="Moyenne">Moyenne</option>
                    <option value="Basse">Basse</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Date d'échéance</label>
                    <input type="datetime-local" class="form-control" name="date_echeance" autocomplete="off" placeholder="Entrez la date d'échéance">
                </div>

                <div class="mb-3">
                    <label class="form-label">Catégorie</label>
                    <select name="categorie" id="categorie" class="form-select">
                    <option value="1">Etudes</option>
                    <option value="2">Personnel</option>
                    <option value="3">Travail</option>
                </div>
                <br><br>
                <div class="mb-3">
                    <input type="submit" name="valider" value="Modifier" class="btn btn-primary">
                </div>

            </form>      
      </div>
  </body>
</html>
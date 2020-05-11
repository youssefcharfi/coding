<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<style>
body{
    background-image:url(images/img1.jpg);
    background-size:cover;
    background-attachment:fixed;
}
.content{
    background:white;
    width:80%;
    padding: 50px;
    margin:auto;
    font-family: calibri;
}
.card{
  padding-left:33%;
  padding-top:5%;
}

</style>
<link rel="stylesheet" href="./style.css"/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script><title>Gestion des élèves</title>
</head>
<body>
<div class="card">
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="https://previews.123rf.com/images/salamatik/salamatik1801/salamatik180100019/92979836-ic%C3%B4ne-de-visage-anonyme-de-profil-personne-silhouette-grise-avatar-par-d%C3%A9faut-masculin-photo-placeholder-.jpg" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                          <?= $data['nom']." ".$data['prenom']; ?></h4>
                        <small><cite title="Casablance, MA">Casablance, MA <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small><br>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?= " ".$data['email']; ?>
                            <br>
                            <i class="glyphicon glyphicon-globe"></i><a href="linkedin.com"> www.linkedin.com</a>
                            <br>
                            <i class="glyphicon glyphicon-gift"></i> mai 01, 1999 <br>
                            <i class="glyphicon glyphicon-warning-sign"></i> nbre d'absence :<?= " ".$nbre; ?></p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
<div class="content" >
<div id="global">
<h3> Liste d'absence de <strong><?= $data['prenom']." ".$data['nom']; ?> :</strong></h3>
<table >
<tr>
<td><center><strong>Matiere Absentée</strong></center></td>
<td><strong>date </strong></td>
<td> </td>
</tr>
<?php
while($absence=$absc->fetch()){
    ?>
<tr>
<td><center><?= $absence["matiere"];?></center></td>
<td><?=  $absence["date_abs"]; ?></td>
<td><a href="index.php?action=deleteAbsence&amp;id=<?= $absence['id_abs']; ?>"><button type="button" class="btn btn-danger"> supprimer </button>
</a> </td>
</tr>
<?php
}
?>
</table>
</div>
<br>
<form action="index.php?action=addAbsence&amp;id=<?= $data['id_eleves'] ?>" method="POST">
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Marquer une nouvelle absence</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name=choice>
        <option value="oop en php">oop en php</option>
        <option value="c++">c++</option>
        <option value="Reseau">Reseau</option>
        <option value="Ro">Ro</option>
        <option value="PL/SQL">PL/Sql</option>
      </select>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Valider</button>
     <a href="index.php"><button type="button" class="btn btn-link">Annuler</button></a> 
    </div>
    </div>
  </div>
  </div>
</form>
</body>
</html>
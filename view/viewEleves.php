<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<style>
body{
    background-image:url(images/img1.jpg);
    background-size:cover;
    background-attachment:fixed;
    padding-left:7%;
}
.content{
    background:white;
    width:60%;
    padding: 30px;
    margin: 100px auto;
    font-family: calibri;
}


</style>
<link rel="stylesheet" href="./style.css"/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Gestion des élèves</title>
</head>
<body>
<div class="content">
<div id="global">
<p>
<center>
<h2>Liste des élèves Ginf1</h2>
</center>
<br>
<table>
<tr>
<td><strong>CNE</strong></td>
<td><strong>Nom</strong></td>
<td><strong>Prénom</strong></td>
<td><strong>email</strong></td>
<td></td>
</tr>
<?php
while($eleve=$datas->fetch()){
    ?>
<tr>
<td><?php echo $eleve["id_eleves"];?></td>
<td><?=  $eleve["prenom"]; ?></td>
<td><?=  $eleve["nom"]; ?></td> 
<td><?= $eleve["email"]; ?></td>
<td><a href="index.php?action=showEleve&amp;id=<?= $eleve["id_eleves"]; ?>"><button type="button" class="btn btn-info"> Voir Profile </button>
</a> </td>
</tr>
<?php
}
?>
</table>
</p>
</div>
</div>
</body>
</html>
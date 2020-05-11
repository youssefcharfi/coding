<?php
function selectEleves(){
    $bdd= dbConnect();
    $eleves = $bdd->query('SELECT id_eleves,prenom,nom,email from eleves');
    return $eleves;
    
}

function selectEleve($id){
    $bdd= dbConnect();
    $elv = $bdd->prepare('SELECT id_eleves,prenom,nom,email FROM eleves WHERE id_eleves= ? ');
    $elv->execute(array($id));
    $data=$elv->fetch();
    return $data;
}

function selectAbsence($id){
    $bdd= dbConnect();
    $abs = $bdd->prepare('SELECT * from absence where id_elv= ? ');
    $abs->execute(array($id));
    return $abs;
}
function countAbs($id){
    $bdd= dbConnect();
    $nRows = $bdd->prepare('SELECT count(*) from absence where id_elv=?');
    $nRows->execute([$id]);
    $count = $nRows->fetchColumn();
 return  $count;
}
function insertAbs($id,$matiere){
    $bdd= dbConnect();
    $res=$bdd->prepare('INSERT INTO absence(id_elv,matiere) VALUES(?,?)');
    $newabs=$res->execute(array($id,$matiere));
    return $newabs;
}
function deleteAbs($id){
    $bdd= dbConnect();
    $res=$bdd->prepare('DELETE FROM absence WHERE id_abs=?');
    $res->execute(array($id));
    return $res;
}
function selectAbsence2($id){
    $bdd= dbConnect();
    $abs = $bdd->prepare('SELECT id_elv from absence where id_abs= ? ');
    $abs->execute(array($id));
    $data=$abs->fetch();
    return $data;
}
function dbConnect(){
$bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8', 'root', '');
return $bdd;
}
<?php
require_once('model/modelEleves.php');

function showEleves(){
    $datas=selectEleves();
    require('view/viewEleves.php');
}
function showEleve(){
    $data=selectEleve($_GET['id']);
    $absc=selectAbsence($_GET['id']);
    $nbre=countAbs($_GET['id']);
    require('view/viewEleve.php');
}
function addAbsence($id,$matiere){
    $insert=insertAbs($id,$matiere);
    header('location:index.php?action=showEleve&id='.$id);

}
function removeAbsence($id){
    $index=selectAbsence2($id);
    $delete=deleteAbs($id);

    header('location:index.php?action=showEleve&id='.$index['id_elv']);
}

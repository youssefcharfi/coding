<?php
require_once('controller/eleveController.php');
if(isset($_GET['action'])){

    if($_GET['action']=='showEleves')
     {

        showEleves();
    }
    if($_GET['action']=='showEleve')
    {
        if(isset($_GET['id'])){

            showEleve();
        }

    }
    if($_GET['action']=='addAbsence')
    {
        if(isset($_GET['id']))
        addAbsence($_GET['id'],$_POST['choice']);
    }
    if($_GET['action']=='deleteAbsence')
    {
        if(isset($_GET['id'])){

            removeAbsence($_GET['id']);
        }
    }
}
else 
showEleves();

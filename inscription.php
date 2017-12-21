<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');
require("tpl/smarty.class.php"); // On inclut la classe Smarty

$smarty = new Smarty();

if(isset($_POST['email'])){
    $sql = "INSERT INTO utilisateurs(email,mdp,sid) VALUES (:email,:mdp,:sid)";
    $prep = $pdo->prepare($sql);
    $prep->bindValue(':email',$_POST['email']);
    $prep->bindValue(':mdp',md5($_POST['mdp']));
    $sid= md5($_POST['email'].time());    
    $prep->bindValue(':sid',$sid);
    $cookie = setcookie('sid',$sid,time()+15*60);
    $prep->execute();
    $prep->rowCount();
    header("location:index.php");
}
else{
    $smarty->display("inscription.tpl");
}

include('includes/bas.inc.php');
?>
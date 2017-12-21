<?php
	include('includes/connexion.inc.php');
	include('includes/haut.inc.php');
    require_once("tpl/smarty.class.php"); // On inclut la classe Smarty

    $smarty = new Smarty();

    if(isset($_GET['a'])){
        $sql="SELECT * FROM messages WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id',$_GET['id']);
        $all_data = array();
        $stmt->execute();
        while($data=$stmt->fetch()){
            $all_data[0] = $data['contenu'];
        }
        $smarty->assign('contenu',$all_data[0]);
        $smarty->assign('getA',$_GET['a']);
    }

    $sql2="SELECT * FROM messages ORDER BY date DESC" ; 
    $stmt2=$pdo->query($sql2);
    $stmt2->execute();
    while($data=$stmt->fetch()){
        $all_data[] = $data;
    
    $smarty->assign('contenu',$all_data[0]);
    $smarty->assign('connecte',$connecte_util);
    $smarty->display('index.tpl');
        
	include('includes/bas.inc.php');
?>
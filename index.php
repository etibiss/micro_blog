<?php
	include('includes/connexion.inc.php');
	include('includes/haut.inc.php');
    require_once("tpl/smarty.class.php"); // On inclut la classe Smarty

    $smarty = new Smarty();

/* Requête en cas de modification de message */
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $sql="SELECT * FROM messages WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id',$_GET['id']);
        $all_data = array();
        $stmt->execute();
        while($data=$stmt->fetch()){
            $smarty->assign('contenu',$data['contenu']);
        }
        $smarty->assign('id',$_GET['id']);
    }

/* Requête pour afficher les messages en fonction de la recherche (ou pas) */
    $limitMess = 5;

    /*if(isset($_GET['page']) || isset($_GET['contenu'])){
        $sql2 = 'SELECT contenu, date FROM messages 
        WHERE contenu LIKE "%'.$_GET['contenu'].'%"
        ORDER BY date DESC 
        LIMIT '.($_GET['page']*$limitMess-$limitMess).','.$limitMess;
    }
    else{*/
        $sql2 = 'SELECT contenu, date FROM messages 
        INNER JOIN utilisateurs ON messages.id_utilisateurs=utilisateurs.id 
        ORDER BY date DESC LIMIT 0,'.$limitMess;
    //}
    $stmt2=$pdo->query($sql2);
    $i=0;
    $all_data = array();
    while($data=$stmt2->fetch()){
        $all_data[$i]['contenu'] = $data['contenu'];
        $all_data[$i]['date'] = $data['date'];
        $smarty->assign('messages',$all_data[$i]);
        $i++;
    }
    $smarty->assign('connecte',$connecte_util);
    $smarty->display('index.tpl');
        
	include('includes/bas.inc.php');
?>
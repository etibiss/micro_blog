<?php
	include('includes/connexion.inc.php');
	include('includes/verif_util.inc.php');
if ($connecte_util == true){
    $a=$_GET['a'];
	if($a=='sup'){
		$sql="DELETE FROM messages WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id',$_GET['id']);
		$stmt->execute();
		header("location:index.php");
	}
	else if($a=='mod'){
		$sql="UPDATE messages SET contenu = :contenu, date = UNIX_TIMESTAMP() WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id',$_GET['id']);
		$stmt->bindValue(':contenu', $_POST['message']);
		$stmt->execute();
		header("location:index.php");
	}
	else{
		$sql = "INSERT INTO messages(contenu,date) VALUES (:contenu,UNIX_TIMESTAMP())";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':contenu', $_POST['message']);
		$stmt->execute();
		header("location:index.php");
	}
	exit();
}
?>
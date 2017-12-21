<?php
	include('includes/connexion.inc.php');
	include('includes/haut.inc.php');
	?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->

    <section>
        <div class="container">
            <div class="row">
                <?php if($connecte_util == true){
                    if(isset($_GET['a'])){
                        $sql="SELECT * FROM messages WHERE id=:id";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindValue(':id',$_GET['id']);
                        $stmt->execute();
                        $data=$stmt->fetch();
?>
                    ?>
                    <form method="POST" action="message.php?a=<?=$_GET['a']?>&id=<?=$data['id']?>">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <textarea id="message" name="message" class="form-control">
                                    <?php echo $data['contenu'];?>
                                </textarea>
                                <input type="hidden" name="id" value="id" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-success btn-lg">Modifier</button>
                        </div>
                    </form>
                    <?php }else {?>
                        <form method="POST" action="message.php">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control" placeholder="Ecrivez votre message ici"></textarea>
                                    <input type="hidden" name="id" value="id" />
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                            </div>
                        </form>
                        <?php } 
                }?>

            </div>
            <div class="row">
                <?php $sql="SELECT * FROM messages ORDER BY date DESC" ; $stmt=$pdo->query($sql); while($data=$stmt->fetch()){ ?>
                    <blockquote>
                        <p>
                            <?php echo $data['contenu']; ?>
                        </p>
                        <footer>
                            <?php echo date('d/m/Y à H:i:s',$data['date']);?>
                        </footer>
                        <?php if($connecte_util == true){ ?>
                            <a href="message.php?a=sup&id=<?=$data['id']?>" class="btn btn-danger">Supprimer</a>
                            <a href="index.php?a=mod&id=<?=$data['id']?>" class="btn btn-primary">Modifier</a>
                            <?php } ?>
                    </blockquote>
                    <?php } ?>

            </div>
    </section>

    <?php
	include('includes/bas.inc.php');
?>
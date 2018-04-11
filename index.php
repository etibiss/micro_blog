<?php /*
	include('includes/connexion.inc.php');
	include('includes/haut.inc.php');
    require_once("tpl/smarty.class.php"); // On inclut la classe Smarty

    $smarty = new Smarty();

/* Requête en cas de modification de message
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

/* Requête pour afficher les messages en fonction de la recherche (ou pas)
    $limitMess = 5;

    /*if(isset($_GET['page']) || isset($_GET['contenu'])){
        $sql2 = 'SELECT contenu, date FROM messages 
        WHERE contenu LIKE "%'.$_GET['contenu'].'%"
        ORDER BY date DESC 
        LIMIT '.($_GET['page']*$limitMess-$limitMess).','.$limitMess;
    }
    else{
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
*/ ?>
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
                        <button type="submit" class="btn btn-warning btn-lg">Modifier</button>
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
                <form method="GET" action="index.php">
                    <?php if(isset($_GET['search'])){ ?>
                    <div class="col-sm-6" id="search-retour">
                        <a href="index.php">&#8592; Retour à l'accueil</a>
                    </div>
                    <?php } ?>
                    <div class="col-sm-6" id="search">
                        <div class="input-group add-on">
                            <input type="search" name="search" class="form-control" placeholder="Rechercher un message" />
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <?php
                    if(isset($_GET['search'])){
                        $sql="SELECT * FROM messages WHERE contenu LIKE '%:search%' ORDER BY date DESC";
                        $stmt=$pdo->query($sql);
                        $stmt->bindValue(':search',$_GET['search']);
                    }else {
                        $sql="SELECT * FROM messages ORDER BY date DESC" ;
                        $stmt=$pdo->query($sql);
                    }
                    while($data=$stmt->fetch()){
                ?>
                    <blockquote>
                        <p class="msg_content">
                            <?php echo $data['contenu']; ?>
                        </p>
                        <footer>
                            <?php echo date('d/m/Y à H:i:s',$data['date']);?>
                            <button class="btn-like"><span class="glyphicon glyphicon-thumbs-up">Like</span></button>
                        </footer>
                        <?php if($connecte_util == true){ ?>
                        <a href="message.php?a=sup&id=<?=$data['id']?>" class="btn btn-danger">Supprimer</a>
                        <a href="index.php?a=mod&id=<?=$data['id']?>" class="btn btn-warning">Modifier</a>
                        <?php } ?>
                    </blockquote>
                    <?php } ?>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $(".btn-like").click(function(e) {
                if ($(this).children().text() == "Like") {
                    $(this).children().text('Unlike');
                    $(this).children().removeClass('glyphicon-thumbs-up');
                    $(this).children().addClass('glyphicon-thumbs-down');
                    $(this).css('box-shadow', '0px 0px 5px blue');
                } else {
                    $(this).children().text('Like');
                    $(this).children().removeClass('glyphicon-thumbs-down');
                    $(this).children().addClass('glyphicon-thumbs-up');
                    $(this).css('box-shadow', 'none');
                }
                return false;
            });

            var email = '[\w]*\.*[\w]+@([a-z]+\.[a-z])+/g';
            var tel = '(0+[1-9])\.?\s?([0-9]{2})\.?\s?([0-9]{2})\.?\s?([0-9]{2})\.?\s?([0-9]{2})/gx';
            var url = 'https?:\/\/([\w]+\.?[\w]+)\S*\/([\w]+\.?[\w]*)/g';
            var msg = ('.msg_content').text();
            msg.replace(email, "<a href='mailto:" + msg.match(email) + "'>" + msg.match(email) + "</a>");
            msg.replace(tel, "<a href='tel:" + msg.match(tel) + "'>" + msg.match(tel) + "</a>");
            msg.replace(url, "<a href='" + msg.match(url) + "'>" + msg.match(url) + "</a>");

            console.log(regex1.test(str1));

        });

    </script>

    <?php
    include('includes/bas.inc.php');
?>

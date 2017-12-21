<?php
/* Smarty version 3.1.31, created on 2017-12-21 16:30:39
  from "C:\wamp\www\micro_blog\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3be1af1db668_58244133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f17ea16eab24b194ce0702584be33095c919bf8' => 
    array (
      0 => 'C:\\wamp\\www\\micro_blog\\index.tpl',
      1 => 1513873834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3be1af1db668_58244133 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php if ('connecte') {?>
                    <?php if ('getA') {?>
                    <form method="POST" action="message.php?a=<?php echo '<?=';?>$_GET['a']<?php echo '?>';?>&id=<?php echo '<?=';?>$data['id']<?php echo '?>';?>">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <textarea id="message" name="message" class="form-control">
                                    <?php echo '<?php ';?>echo $data['contenu'];<?php echo '?>';?>
                                </textarea>
                                <input type="hidden" name="id" value="id" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-success btn-lg">Modifier</button>
                        </div>
                    </form>
                    <?php } else { ?>
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
                    <?php }?>
                <?php }?>

            </div>
            <div class="row">
                    <blockquote>
                        <p>
                            <?php echo '<?php ';?>echo $data2['contenu']; <?php echo '?>';?>
                        </p>
                        <footer>
                            <?php echo '<?php ';?>echo date('d/m/Y à H:i:s',$data2['date']);<?php echo '?>';?>
                        </footer>
                        <?php if ('connecte') {?>
                            <a href="message.php?a=sup&id=<?php echo '<?=';?>$data['id']<?php echo '?>';?>" class="btn btn-danger">Supprimer</a>
                            <a href="index.php?a=mod&id=<?php echo '<?=';?>$data['id']<?php echo '?>';?>" class="btn btn-primary">Modifier</a>
                        <?php }?>
                    </blockquote>
                    <?php echo '<?php ';?>} <?php echo '?>';?>

            </div>
    </section><?php }
}

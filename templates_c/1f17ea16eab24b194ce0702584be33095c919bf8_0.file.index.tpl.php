<?php
/* Smarty version 3.1.31, created on 2018-01-19 21:24:37
  from "C:\wamp\www\micro_blog\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a626215b90997_24057052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f17ea16eab24b194ce0702584be33095c919bf8' => 
    array (
      0 => 'C:\\wamp\\www\\micro_blog\\index.tpl',
      1 => 1516397073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a626215b90997_24057052 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Tête de page -->
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

<!-- Créer un message  -->

<section>
    <div class="container">
        <div class="row">
            <?php if ('connecte') {?> <?php if ('getId') {?>
            <form method="POST" action="message.php?id=<?php echo $_GET['id'];?>
">
                <div class="col-sm-10">
                    <div class="form-group">
                        <textarea id="message" name="message" class="form-control"><?php echo $_GET['contenu'];?>
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
            <?php }?> <?php }?>

            <!-- Liste des messages -->
        </div>

        <div class="row">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, 'all_data', 'contenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contenu']->value) {
?>
            <blockquote>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['all_data']->value['contenu'];?>

                </p>
                <footer>
                    <?php echo '<?php ';?>echo date('d/m/Y à H:i:s',<?php echo $_smarty_tpl->tpl_vars['all_data']->value['date'];?>
); <?php echo '?>';?>
                </footer>
                <?php if ('connecte') {?>
                <a href="message.php?a=sup&id=<?php echo '<?=';?>$data['id']<?php echo '?>';?>" class="btn btn-danger">Supprimer</a>
                <a href="index.php?a=mod&id=<?php echo '<?=';?>$data['id']<?php echo '?>';?>" class="btn btn-primary">Modifier</a> <?php }?>
            </blockquote>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
        <!-- Zone de pagination-->
        <div class="col-md-offset-4">
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-lg ">

                    <!-- Si l'utilisateur n'est pas sur la premiere page, affiche le bouton de page precedente-->
                    <?php if (isset($_GET['page']) && $_GET['page'] != 1) {?>
                    <li>
                        <a href="index.php?page=<?php echo $_GET['page']-1;
if (isset($_GET['contenu'])) {?>&amp;contenu=<?php echo $_GET['contenu'];
}?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php }?> <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbrePages']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['nbrePages']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <li>
                        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value+1;
if (isset($_GET['contenu'])) {?>&amp;contenu=<?php echo $_GET['contenu'];
}?>"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a>
                    </li>
                    <?php }
}
?>


                    <!-- Si l'utilisateur n'est pas sur la derniere page, affiche le bouton de page suivante -->
                    <?php if (!isset($_GET['page']) || $_GET['page'] < $_smarty_tpl->tpl_vars['nbrePages']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nbreMessages']->value > $_smarty_tpl->tpl_vars['mpp']->value) {?>
                        <li>
                            <!-- balise a du bouton suivant qui renvoie a la page 2 si le numero de page n'est pas encore defini, et a la page suivante si le numero de page est defini -->
                            <a href="index.php?page=<?php if (isset($_GET['page']) && $_GET['page'] != 1) {
echo $_GET['page']+1;
} else {
echo 2;
}
if (isset($_GET['contenu'])) {?>&amp;contenu=<?php echo $_GET['contenu'];
}?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        <?php }?> <?php }?>
                </ul>
            </nav>
        </div>

        <div class="row">
            <form action="index.php" method="get">
                <div class="col-sm-10">
                    <input type="text" placeholder="Rechercher" name="contenu" class="form-control search">
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</section><?php }
}

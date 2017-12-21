<?php
/* Smarty version 3.1.31, created on 2017-11-22 16:31:05
  from "C:\wamp\www\micro_blog\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a15a649834608_76330688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c46a101f5ec78ab0706c0711e572db3a1b7530b' => 
    array (
      0 => 'C:\\wamp\\www\\micro_blog\\inscription.tpl',
      1 => 1511368259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a15a649834608_76330688 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Inscription</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

Hello World!

<form class="form_inscription form-horizontal" action="inscription.php" method="POST">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassworqld3" class="col-sm-2 control-label">Mot de passe</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassworqld3" class="col-sm-2 control-label">Confirmer mot de passe</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" id="confmdp" placeholder="Confirmer Mot de passe" name="confmdp">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">S'inscrire</button>
        </div>
    </div>
</form><?php }
}

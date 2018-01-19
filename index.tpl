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

<!-- Créer (ou modifier) un message -->

<section>
    <div class="container">
        <div class="row">
            {if connecte} {if getId}
            <form method="POST" action="message.php?id={$smarty.get.id}">
                <div class="col-sm-10">
                    <div class="form-group">
                        <textarea id="message" name="message" class="form-control">{$smarty.get.contenu}</textarea>
                        <input type="hidden" name="id" value="id" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-success btn-lg">Modifier</button>
                </div>
            </form>
            {else}
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
            {/if} {/if}

            <!-- Liste des messages -->
        </div>

        <div class="row">

            {foreach all_data contenu}
            <blockquote>
                <p>
                    {$all_data.contenu}
                </p>
                <footer>
                    <?php echo date('d/m/Y à H:i:s',{$all_data.date}); ?>
                </footer>
                {if connecte}
                <a href="message.php?a=sup&id=<?=$data['id']?>" class="btn btn-danger">Supprimer</a>
                <a href="index.php?a=mod&id=<?=$data['id']?>" class="btn btn-primary">Modifier</a> {/if}
            </blockquote>
            {/foreach}
        </div>
        <!-- Zone de pagination-->
        <div class="col-md-offset-4">
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-lg ">

                    <!-- Affiche le bouton de page precedente-->
                    {if isset($smarty.get.page)}
                    <li>
                        <a href="index.php?page={$smarty.get.page-1}{if isset($smarty.get.contenu)}&amp;contenu={$smarty.get.contenu}{/if}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    {/if} {for $i=0 to $nbrePages-1}
                    <li>
                        <a href="index.php?page={$i+1}{if isset($smarty.get.contenu)}&amp;contenu={$smarty.get.contenu}{/if}">{$i+1}</a>
                    </li>
                    {/for}

                    <!-- Affiche le bouton de page suivante -->
                    {if !isset($smarty.get.page) or $smarty.get.page
                    < $nbrePages} {if $nbreMessages> $mpp}
                        <li>
                            <a href="index.php?page={if isset($smarty.get.page) && $smarty.get.page!=1}{$smarty.get.page+1}{else}{2}{/if}{if isset($smarty.get.contenu)}&amp;contenu={$smarty.get.contenu}{/if}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        {/if} {/if}
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
</section>
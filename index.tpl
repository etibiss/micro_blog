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
                {if connecte}
                    {if getA}
                    <form method="POST" action="message.php?a={getA}&id={data['id']?>">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <textarea id="message" name="message" class="form-control">{data.contenu}</textarea>
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
                    {/if}
                {/if}

            </div>
            <div class="row">
                {foreach all_data}
                    <blockquote>
                        <p>
                            {data.contenu}
                        </p>
                        <footer>
                            <?php echo date('d/m/Y à H:i:s',{data.date}); ?>
                        </footer>
                        {if connecte}
                            <a href="message.php?a=sup&id=<?=$data['id']?>" class="btn btn-danger">Supprimer</a>
                            <a href="index.php?a=mod&id=<?=$data['id']?>" class="btn btn-primary">Modifier</a>
                        {/if}
                    </blockquote>
                {/boucle}
            </div>
    </section>
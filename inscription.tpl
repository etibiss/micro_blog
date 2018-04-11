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

<form class="form_inscription form-horizontal" action="inscription.php" method="POST">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            <div class="alert alert-danger alert-nom" role="alert"></div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassworqld3" class="col-sm-2 control-label">Mot de passe</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
            <div class="alert alert-danger alert-nom" role="alert"></div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassworqld3" class="col-sm-2 control-label">Confirmer mot de passe</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" id="confmdp" placeholder="Confirmer Mot de passe" name="confmdp">
            <div class="alert alert-danger alert-nom" role="alert"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">S'inscrire</button>
        </div>
    </div>
    <div class="user"></div>

</form>

<!-- Script JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.alert').hide();
        $('.user').hide();
        $('form').submit(function() {
            $('input').each(function() {
                if (!($(this).val())) {
                    $(this).next('.alert').show();
                    $(this).next('.alert').html("<span>Ce champ est vide, veuillez le remplir svp !</span>");
                }
                var re = "[\w] * \.*[\w] + @([a - z] + \.[a - z] + ) / gi";
                if (!(re.test($('#email')))) {
                    $(this).next('.alert').show();
                    $(this).next('.alert').html("<span>L'email écrit est incorrecte, veuillez réessayer !</span>");
                }
                $(this).keydown(function() {
                    $(this).next('.alert').hide();
                });
            });


            return false;
        });
    });

    // Email ->	[\w]*\.*[\w]+@([a-z]+\.[a-z]+)
    // Tel ->	(0+[1-9])\.?\s?([0-9]{2})\.?\s?([0-9]{2})\.?\s?([0-9]{2})\.?\s?([0-9]{2})
    // URL ->	https?:\/\/([\w]+\.?[\w]+)\S*\/([\w]+\.?[\w]*)

</script>

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
</form>
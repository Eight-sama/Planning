<div class="row">
    <div class="container">
        <div class="card-panel white">
            <div class="row">
                <form id="connexion-enseignant" action="#" method="post" class="col s12">
                    <h5 class="indigo-text">Connexion</h5>
                    <?= $form->input('text', 'email' ,'Email') ?>
                    <?= $form->input('password', 'mdp' ,'Mot de passe') ?>
                    <?= $form->submit('waves-effect waves-light btn indigo hoverable','Se connecter') ?>
                </form>
            </div>

        </div>
    </div>
</div>
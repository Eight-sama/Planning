<div class="row">
    <div class="container">
        <div class="card-panel white">
            <div class="row">
                <form id="connexion-etudiant" name="submit" action="#" method="post" class="col s12">
                    <h5 class="indigo-text">Connexion</h5>
                    <?= $form->input('text', 'email' ,'Email') ?>
                    <?= $form->input('password', 'mdp' ,'Mot de passe') ?>
                    <?= $form->checkbox('checkbox', 'Se souvenir de moi') ?>
                    <?= $form->submit('waves-effect waves-light btn indigo hoverable','Se connecter', 'submit') ?>
                </form>
            </div>
        </div>
    </div>
</div>
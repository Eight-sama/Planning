<div class="row">
    <div class="white black-text text-darken-2 lighten-2">
    <div class="col s12">
            <div class="card-panel col s12">
                <h5>Profil de l'enseignant : <?= $userInit->getName($_GET['id_u']).'&nbsp;'.$userInit->getSurname($_GET['id_u']);?></h5>
                <form id="modifier_profil" name="submit_profil" action="index.php?page=MiseAJourProfilOther?id_u=<?= $_GET['id_u'];?>" method="post" class="col s12">
                    <?= $form->inputwdefault('text', 'email' , 'E-mail de l\'utilisateur : '.$userInit->getInfOther('email',$_GET['id_u']).'',$userInit->getInfOther('email',$_GET['id_u'])) ?>
                    <?= $form->inputwdefault('text', 'nom' , 'Nom de l\'utilisateur: '.$userInit->getInfOther('nom',$_GET['id_u']).'',$userInit->getInfOther('nom',$_GET['id_u'])) ?>
                    <?= $form->inputwdefault('text', 'prenom' , 'Prénom de l\'utilisateur: '.$userInit->getInfOther('prenom',$_GET['id_u']).'',$userInit->getInfOther('prenom',$_GET['id_u'])) ?>
                    <?= $form->submit('waves-effect waves-light btn indigo hoverable','Mettre à jour ce profil', 'submit_profil') ?>
                </form>
                
            </div>
        </div>
        </div>
</div>
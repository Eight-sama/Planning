<div class="row">
    <div class="white black-text text-darken-2 lighten-2">
    <div class="col s12">
            <div class="card-panel col s12">
                <h5>Mon Profil</h5>
                <form id="modifier_profil" name="submit_profil" action="index.php?page=MiseAJourProfil" method="post" class="col s12">
                    <?= $form->inputwdefault('text', 'email' , 'E-mail actuel : '.$userInit->getInf('email').'',$userInit->getInf('email')) ?>
                    <?= $form->inputwdefault('text', 'nom' , 'Nom d\'utilisateur actuel: '.$userInit->getInf('nom').'',$userInit->getInf('nom')) ?>
                    <?= $form->inputwdefault('text', 'prenom' , 'Prénom d\'utilisateur actuel: '.$userInit->getInf('prenom').'',$userInit->getInf('prenom')) ?>
                    <?= $form->submit('waves-effect waves-light btn indigo hoverable','Mettre à jour le profil', 'submit_profil') ?>
                </form>
                
            </div>
        </div>
        </div>
</div>
<div class="row">
        <div class="white black-text text-darken-2 lighten-2">
        <div class="col s12">
            <div class="card-panel col s12">
                <h5>Gestion des classes</h5>
                <!--<p class="card-panel valign-wrapper center">Aucun devoir à faire pour le moment</p>-->
                <?= $lister->classeLister(); ?>
            </div>
        </div>
        </div>
</div>
<div class="row">
    <div class="col m4 s12">
            <div class="hoverable white black-text text-darken-2 lighten-2">
                <div class="card-panel hoverable col s12">
                    <h5>Devoirs à faire</h5>
                    <div class="card-panel">
                        <div id="matiere"><span><b>Mathématiques</b></span>&nbsp;(Pour le 11/02)</div>
                        <div id="content"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col m4 s12">
            <div class="hoverable white black-text text-darken-2 lighten-2">
                <div class="card hoverable col s12">
                    <h5 class="header black-text">Dernières notes</h5>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content black-text">
                                <p><b>Mathématiques</b> : 20/20</p>
                            </div>
                            <div class="card-action">
                                Coefficient : 4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col m4 s12">
            <div class="hoverable white black-text text-darken-2 lighten-2">
               <div class="card hoverable col s12">
                <h5>Messages récents</h5>
                <div class="card-panel valign-wrapper">
                    <div class="col s3">
                        <img src="http://lorempixel.com/200/200/" alt="" class="circle responsive-img">
                    </div>
                    <div class="col s9">
                        <span class="black-text">
                        <b>Jean Claudius</b><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </span>
                    </div>
                </div>
                </div>
            </div>
    </div>
</div>
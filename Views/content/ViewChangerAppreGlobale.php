<div class="row">
    <div class="container">
        <div class="card-panel white">
            <div class="row">
                <form id="form_appreciation" name="form_appreciation" action="index.php?page=ConfirmerAppre&id_u=<?= $_GET['id_u']; ?>" method="post" class="col s12">
                    <h5 class="indigo-text">Connexion</h5>
                    <?php $etbim = $userInit->getAppreGlobale($_GET['id_u']); ?>
                    <?= $form->textarea('contenu', $etbim) ?>
                    <?= $form->submit('waves-effect waves-light btn indigo hoverable','Modifier l\'appréciation', 'form_appreciation') ?>
                </form>
            </div>
        </div>
    </div>
</div>
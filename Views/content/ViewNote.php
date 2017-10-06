<div class="row">
    <div class="col s12">
        <div class="card-panel col s12">
            <h3 class="center">Ajout de note pour l'élève : <?= $userInit->getName($_GET['id_u']); ?> <?= $userInit->getSurname($_GET['id_u']); ?></h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <div class="white black-text text-darken-2 lighten-2">
            <div class="card col s12">
                <div class="col s12">
                    <form id="envoi_de_note" name="note_submit" action="#" method="post" class="col s12">
	                    <h5 class="indigo-text">Envoi de la note</h5>
	                    <div class="divider"></div>
	                   	<div class='input-field col s12 center'>
		                    <select name="semestre">                    
			                    <option value="default" default disabled>Choisissez un semestre</option>
			                    <option value="1">Semestre 1</option>
			                    <option value="2">Semestre 2</option>
			                </select>
						</div>
						<div class="divider"></div>	                    
	                    <?= $form->input('text', 'devoir' ,'Devoir') ?>
	                    <?= $form->input('text', 'coefficient' ,'Coefficient') ?>
	                    <?= $form->input('text', 'note' ,'Note / 20') ?>
	                    <?= $form->submit('waves-effect waves-light btn indigo hoverable','Envoi de la note','note_submit') ?>                    
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
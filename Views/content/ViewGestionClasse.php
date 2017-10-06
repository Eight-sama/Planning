<div class="row">
    <div class="col s12">
        <div class="card-panel col s12">
            <h3 class="center">Gestion de <?= $classe->getName($_GET['id_c']); ?></h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <div class="white black-text text-darken-2 lighten-2">
            <div class="card col s12">
                <div class="col s12">                	
		            <div class="input-field col s12">
		                <table>
                        <thead>
                            <tr>
                                <th><h5>Liste des élèves :</h5></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?= $lister->gestionClasseLister($_GET['id_c']);?>
                        </tbody>
                    </table>
		            </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
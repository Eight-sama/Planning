
<div class="row">
    <div class="col s12">
        <div class="card-panel col s12">
            <h3 class="center">Veuillez choisir le bulletin d'un élève</h3>
            <div class="input-field col s12">
                <select name="liste_etudiants" onChange="location.href=''+''+'index.php?page=Bulletin&id_u='+this.options[this.selectedIndex].value;">                    
                    <option value="default" default>Choisissez un élève</option>
                    <?= $lister->bulletinLister(); ?>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <div class="card-panel col s12">
            <h5 class="center">Veuillez choisir le professeur dont vous voulez modifier le profil</h5>
            <div class="input-field col s12">
                <select name="liste_etudiants" onChange="location.href=''+''+'index.php?page=OnModifEnseignant&id_u='+this.options[this.selectedIndex].value;">                    
                    <option value="default" default>Choisissez un élève</option>
                    <?= $lister->profLister(); ?>
                </select>
            </div>
        </div>
    </div>
</div>
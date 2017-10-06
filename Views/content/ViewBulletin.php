<div class="row">
    <div class="col s12">
        <div class="card-panel col s12">
            <h3 class="center">Bulletin de <?= $userInit->getName($_GET['id_u']); ?> <?= $userInit->getSurname($_GET['id_u']); ?></h3>
            <div class="input-field col s12">
                <select>                    
                    <option value="default" default>Choisissez un semestre</option>
                    <option value="1">Semestre 1</option>
                    <option value="2">Semestre 2</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <div class="white black-text text-darken-2 lighten-2">
            <div class="card col s12">
                <div class="col s12">
                    <table>
                        <thead>
                            <tr>
                                <th>Matières</th>
                                <th>Note 1</th>
                                <th>Note 2</th>
                                <th>Note 3</th>
                                <th>Note 4</th>
                                <th>Note 5</th>
                                <th>Appréciations</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Mathématiques</td>
                                <td>20/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>Très bon élément</td>
                            </tr>
                            <tr>
                                <td>Culture Générale</td>
                                <td>20/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>Très bon élément</td>
                            </tr>
                            <tr>
                                <td>Science et Vie de la Terre</td>
                                <td>20/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>Très bon élément</td>
                            </tr>
                            <tr>
                                <td>EPS</td>
                                <td>20/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>Très bon élément</td>
                            </tr>
                            <tr>
                                <td>Arts Plastiques</td>
                                <td>20/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>19/20</td>
                                <td>Très bon élément</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12">
        <div class="card-panel col s12">
            <h5 class="center">Appréciation globale</h5>
            <div class="input-field col s12">
                <p>
                    <?= $userInit->getAppreGlobale($_GET['id_u']); ?>
                    &nbsp;&nbsp;&nbsp;<a href="index.php?page=ChangerAppreGlobale&id_u=<?= $_GET['id_u']; ?>"><i class="fa fa-edit"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>
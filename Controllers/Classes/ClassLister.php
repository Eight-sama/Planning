<?php
class ClassLister{

	public function bulletinLister(){
		global $bdd;
		$statement = $bdd->query("SELECT * FROM users WHERE lvl = 1");
		while($action = $statement->fetch()){
	    	echo '<option value="'.$action['id_u'].'">'.$action['nom'].' '.$action['prenom'].'</option>';
		}
	}
	public function classeLister(){
		global $bdd;
		$statement2 = $bdd->query("SELECT * FROM classes");
		while($action2 = $statement2->fetch()){
			echo '<a href="index.php?page=GestionClasse&id_c='.$action2['id_c'].'"><div class="card-panel hoverable col m2"><i class="fa fa-book"></i>&nbsp;'.$action2['nom_c'].'</div></a>';
		}
	}
	public function gestionClasseLister($get){
		global $bdd;
		$statement3 = $bdd->query("SELECT * FROM classes, users WHERE classes.id_c = users.id_c AND classes.id_c = $get");
		while($action3 = $statement3->fetch()){
			echo '<tr><td>'.$action3['prenom'].' '.$action3['nom'].'&nbsp;&nbsp;&nbsp;'.'<a href="index.php?page=EditerUser&id_u='.$action3['id_u'].'"><i class="fa fa-edit"></i></a></td></tr>';
		}
	}
}
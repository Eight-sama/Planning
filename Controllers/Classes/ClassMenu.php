<?php
	class ClassMenu{
		private function studentList(){
		$html = "<li>";
            $html .= "<div class='user-view'>";
            $html .= "<div class='background'>";
            $html .= "<img src='http://lorempixel.com/400/200/'>";
            $html .= "</div>";
            $html .= "<a href='#!user'><img class='circle' src='http://lorempixel.com/295/200/'></a>";
            $html .= "<a href='#!name'><span class='white-text name'>";
            $html .= $_SESSION['prenom'];
            $html .= " "; 
            $html .= $_SESSION['nom'];
            $html .= "</span></a>";
            $html .= "<a href='#!email'><span class='white-text email'>";
            $html .= $_SESSION['email'];
            $html .= "</span></a>";
            $html .= "</div>";
            $html .= "</li>";
		$html .= "<li><a href='index.php?page=Bulletin'>Bulletin</a></li>";
		$html .= "<li><a href='#'>Appréciations</a></li>";
            $html .= "<li><div class='divider'></div></li>";
            $html .= "<li><a href='index.php?page=Deconnexion'>Se déconnecter</a></li>";
			return $html;
		}
		private function teacherList(){
			$html = "<li>";
            $html .= "<div class='user-view'>";
            $html .= "<div class='background'>";
            $html .= "<img src='http://lorempixel.com/400/200/'>";
            $html .= "</div>";
            $html .= "<a href='#!user'><img class='circle' src='http://lorempixel.com/295/200/'></a>";
            $html .= "<a href='#!name'><span class='white-text name'>";
            $html .= $_SESSION['prenom'];
            $html .= " "; 
            $html .= $_SESSION['nom'];
            $html .= "</span></a>";
            $html .= "<a href='#!email'><span class='white-text email'>";
            $html .= $_SESSION['email'];
            $html .= "</span></a>";
            $html .= "</div>";
            $html .= "</li>";
		$html .= "<li><a href='index.php?page=Bulletin'>Voir un bulletin</a></li>";
		$html .= "<li><a href='index.php?page=Bulletin'>Ajouter une note</a></li>";
		$html .= "<li><a href='index.php?page=Bulletin'>Modifier une note</a></li>";
		$html .= "<li><a href='index.php?page=Bulletin'>Ajouter / Modifier une appréciation</a></li>";
            $html .= "<li><div class='divider'></div></li>";
            $html .= "<li><a href='index.php?page=Deconnexion'>Se déconnecter</a></li>";
			return $html;
		}
		private function adminList(){
			$html = "<li>";
            $html .= "<div class='user-view'>";
            $html .= "<div class='background'>";
            $html .= "<img src='http://lorempixel.com/400/200/'>";
            $html .= "</div>";
            $html .= "<a href='#!user'><img class='circle' src='http://lorempixel.com/295/200/'></a>";
            $html .= "<a href='#!name'><span class='white-text name'>";
            $html .= $_SESSION['prenom'];
            $html .= " "; 
            $html .= $_SESSION['nom'];
            $html .= "</span></a>";
            $html .= "<a href='#!email'><span class='white-text email'>";
            $html .= $_SESSION['email'];
            $html .= "</span></a>";
            $html .= "</div>";
            $html .= "</li>";
            $html .= "<li><a href='index.php?page=Espace'>Mon profil</a></li>";
		$html .= "<li><a href='index.php?page=Bulletin'>Voir un bulletin</a></li>";
		$html .= "<li><a href='index.php?page=Note'>Ajouter une note</a></li>";
		$html .= "<li><a href='index.php?page=Bulletin'>Modifier une note</a></li>";
            $html .= "<li><a href='index.php?page=AttribuerMatiere'>Attribuer matière à professeur</a></li>";
            $html .= "<li><a href='index.php?page=VerrouillerSemestre'>Verrouiller un semestre</a></li>";
            $html .= "<li><a href='index.php?page=AjouterEleve'>Ajouter un élève à une classe</a></li>";
		$html .= "<li><a href='index.php?page=ModifierUtilisateur'>Modifier le profil d'un utilisateur</a></li>";
		$html .= "<li><a href='index.php?page=ModifierAppreciation'>Ajouter / Modifier une appréciation</a></li>";
            $html .= "<li><div class='divider'></div></li>";
            $html .= "<li><a href='index.php?page=Deconnexion'>Se déconnecter</a></li>";
			return $html;
		}
		private function notConnectedList(){
			$html = "<li>";			
            $html .= "<div class='card'>";
            $html .= "<span>Vous êtes actuellement hors ligne, merci de vous connecter pour accéder à ce menu.</span>";
            $html .= "</div>";
            $html .= "</li>";
			return $html;
		}
		public function listHandler(){
			$menuInit = new ClassMenu;

			if(!empty($_SESSION) && isset($_SESSION) && ($_SESSION['lvl'] == 1)){
				echo $menuInit->studentList();
			}
			elseif (!empty($_SESSION) && isset($_SESSION) && ($_SESSION['lvl'] == 2)) {
				echo $menuInit->teacherList();
			}
			elseif (!empty($_SESSION) && isset($_SESSION) && ($_SESSION['lvl'] == 3)) {
				echo $menuInit->adminList();
			}
			else{
				echo $menuInit->notConnectedList();
			}
		}
	}
?>
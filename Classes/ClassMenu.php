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
		$html .= "<li><a href='index.php?page=BulletinEleve'>Bulletin</a></li>";
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
		$html .= "<li><a href='index.php?page=BulletinEnseignant'>Voir un bulletin</a></li>";
		$html .= "<li><a href='index.php?page=BulletinEnseignant'>Ajouter une note</a></li>";
		$html .= "<li><a href='index.php?page=BulletinEnseignant'>Modifier une note</a></li>";
		$html .= "<li><a href='index.php?page=BulletinEnseignant'>Ajouter / Modifier une appréciation</a></li>";
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
		$html .= "<li><a href='index.php?page=BulletinAdmin'>Voir un bulletin</a></li>";
		$html .= "<li><a href='index.php?page=BulletinAdmin'>Ajouter une note</a></li>";
		$html .= "<li><a href='index.php?page=BulletinAdmin'>Modifier une note</a></li>";
		$html .= "<li><a href='index.php?page=ModifierProfilUtilisateurAdmin'>Modifier le profil d'un utilisateur</a></li>";
		$html .= "<li><a href='index.php?page=BulletinAdmin'>Ajouter / Modifier une appréciation</a></li>";
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
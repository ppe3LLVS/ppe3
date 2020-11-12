<?php
	class Cavalier
	{
		private $_id;
		private $_nom;
		private $_prenom;
		private $_ddn;
		private $_adresse;
		private $_rue;
		private $_cp;
		private $_ville;
		private $_tel;
		private $_mail;
		private $_login;
		private $_mdp;

		function __construct($nom,$prenom,$ddn,$adresse,$rue,$cp,$ville,$tel,$mail,$login,$mdp)
		{
			$this->_nom = $nom;
			$this->_prenom = $prenom;
			$this->_ddn = $ddn;
			$this->_adresse = $adresse;
			$this->_rue = $rue;
			$this->_cp = $cp;
			$this->_ville = $ville;
			$this->_tel = $tel;
			$this->_mail = $mail;
			$this->_login = $login;
			$this->_mdp = $mdp;
		}

		public function nouveau_cavalier($con,$nom,$prenom,$ddn,$adresse,$rue,$cp,$ville,$tel,$mail,$login,$mdp)
		{
			$req = $con->query("INSERT INTO cavaliers(nomca, preca, dnca, adrca, rueca, cpca, vilca, telca, mailca, loginca, mdpca) VALUES ('$nom','$prenom','$ddn',$adresse,'$rue',$cp,'$ville','$tel','$mail','$login','$mdp')");
			if (!$req) {
?>
				<script type="text/javascript">
					alert('!!! Insertion inaboutie !!!');
				</script>
<?php
			} else {
?>
				<script type="text/javascript">
					alert('! Insertion réussie !');
				</script>
<?php
			}		
		}

		public function recherche_cavalier($con,$login,$mdp)
		{
			$req = $con->query("SELECT * FROM cavaliers WHERE loginca='$login' AND mdpca='$mdp'");
			if (!$req) {
?>
				<script type="text/javascript">
					alert('!!! Résultat introuvable !!!');
				</script>
<?php
			} else {
?>
				<script type="text/javascript">
					alert('! Recherche réussie !');
				</script>
<?php
			}
			
		}
	}
?>
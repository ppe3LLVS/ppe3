<?php
	class Cavalier
	{
		private $_id;
		private $_nom;
		private $_prenom;
		private $_ddn;
		private $_adresse;
		private $_lieu;
		private $_cp;
		private $_ville;
		private $_tel;
		private $_mail;
		private $_login;
		private $_mdp;

		function __construct($id,$nom,$prenom,$ddn,$adresse,$lieu,$cp,$ville,$tel,$mail,$login,$mdp)
		{
			$this->_id = $id;
			$this->_nom = $nom;
			$this->_prenom = $prenom;
			$this->_ddn = $ddn;
			$this->_adresse = $adresse;
			$this->_lieu = $lieu;
			$this->_cp = $cp;
			$this->_ville = $ville;
			$this->_tel = $tel;
			$this->_mail = $mail;
			$this->_login = $login;
			$this->_mdp = $mdp;
		}

		public function get_id()
		{
			return $this->_id;
		}

		public function get_nom()
		{
			return $this->_nom;
		}

		public function get_prenom()
		{
			return $this->_prenom;
		}

		public function get_ddn()
		{
			return $this->_ddn;
		}

		public function get_adresse()
		{
			return $this->_adresse;
		}

		public function get_lieu()
		{
			return $this->_lieu;
		}

		public function get_cp()
		{
			return $this->_cp;
		}

		public function get_ville()
		{
			return $this->_ville;
		}

		public function get_tel()
		{
			return $this->_tel;
		}

		public function get_mail()
		{
			return $this->_mail;
		}

		public function get_login()
		{
			return $this->_login;
		}

		public function get_mdp()
		{
			return $this->_mdp;
		}

		public function verification_doublons($con,$nom,$prenom,$ddn,$adresse,$lieu,$cp,$ville,$tel,$mail,$login,$mdp)
		{
			$sql = "SELECT idca FROM cavaliers WHERE nomca='$nom' AND preca='$prenom' AND dnca='$ddn' AND adrca='$adresse' AND lieuca='$lieu' AND cpca='$cp' AND vilca='$ville' AND telca='$tel' AND mailca='$mail'";
			$selection = $con->query($sql);
			$lignes = $selection->fetchAll();
			return count($lignes);
		}

		public function nouveau_cavalier($con,$nom,$prenom,$ddn,$adresse,$lieu,$cp,$ville,$tel,$mail,$login,$mdp)
		{
			$sql = "INSERT INTO cavaliers(nomca, preca, dnca, adrca, lieuca, cpca, vilca, telca, mailca, loginca, mdpca) VALUES ('$nom','$prenom','$ddn','$adresse','$lieu','$cp','$ville','$tel','$mail','$login','$mdp')";
			$insertion = $con->query($sql);
		}

		public function recuperation_id($con)
		{
			$sql = 'SELECT MAX(idca) AS maxid FROM cavaliers';
			$maxid = $con->query($sql);
			while ($id = $maxid->fetch()) {
				$nid = $id['maxid'];
			}
			$this->_id = $nid;
		}

		public function erreur()
		{
?>
			<script type="text/javascript">
				alert('Une identité similaire a déjà été enregistrée.')
			</script>
<?php
		}

		public function table_cavalier($con)
		{
			$tab_cavalier = $con->query('SELECT * FROM cavaliers');
		    foreach ($tab_cavalier as $cavalier) {
		        $ocavalier = new Cavalier($cavalier['idca'],$cavalier['nomca'],$cavalier['preca'],$cavalier['dnca'],$cavalier['adrca'],$cavalier['lieuca'],$cavalier['cpca'],$cavalier['vilca'],$cavalier['telca'],$cavalier['mailca'],$cavalier['loginca'],$cavalier['mdpca']);
?>
                <tr>  
                    <td><?php echo $ocavalier->get_id() ?></td>
                    <td><?php echo $ocavalier->get_nom() ?></td>
                    <td><?php echo $ocavalier->get_prenom() ?></td>
                    <td><?php echo $ocavalier->get_ddn() ?></td>
                    <td><?php echo $ocavalier->get_adresse() ?></td>
                    <td><?php echo $ocavalier->get_lieu() ?></td>
                    <td><?php echo $ocavalier->get_cp() ?></td>
                    <td><?php echo $ocavalier->get_ville() ?></td>
                    <td><?php echo $ocavalier->get_tel() ?></td>
                    <td><?php echo $ocavalier->get_mail() ?></td>
                    <td><?php echo $ocavalier->get_login() ?></td>
                    <td><?php echo $ocavalier->get_mdp() ?></td>
                </tr>
<?php
    		}
		}

		public function recherche_cavalier($con,$login,$mdp)
		{
			$recherche = $con->query("SELECT idca FROM cavaliers WHERE mailca='$login' OR loginca='$login' AND mdpca='$mdp'");
			$lignes = $recherche->fetchAll();
			if (count($lignes) == 0) {
?>
<script type="text/javascript">
	alert('Recherche inaboutie.')
</script>
<?php
			}
			else {
			    foreach ($lignes as $cavalier) {
			    	$id = $cavalier['idca'];
			        header("Location:../../index.php?identifiant=$id");
			    }
			}
		}
	}
?>
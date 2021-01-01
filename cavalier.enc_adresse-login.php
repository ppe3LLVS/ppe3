<?php
	include 'adresse.php';
	include 'login.php';

	class Cavalier
	{
		private $_identifiant;
		private $_nom;
		private $_prenom;
		private $_ddn;
		private $_oadresse;
		private $_numtel;
		private $_mail;
		private $_mdp;		
		private $_ologin;

		function __construct($identifiant,$nom,$prenom,$ddn,Adresse $adresse,$numtel,$mail,$mdp,Login $login)
		{
			$this->_identifiant = $identifiant;
			$this->_nom = $nom;
			$this->_prenom = $prenom;
			$this->_ddn = $ddn;
			$this->_oadresse = $adresse;
			$this->_numtel = $numtel;
			$this->_mail = $mail;
			$this->_mdp = $mdp;
			$this->_ologin = $login;
		}

		public function setAll($identifiant,$nom,$prenom,$ddn,$numtel,$mail,$mdp)
		{
			$this->_identifiant = $identifiant;
			$this->_nom = $nom;
			$this->_prenom = $prenom;
			$this->_ddn = $ddn;
			$this->_numtel = $numtel;
			$this->_mail = $mail;
			$this->_mdp = $mdp;
		}

		public function getIdentifiant()
		{
			return $this->_identifiant;
		}

		public function getNom()
		{
			return $this->_nom;
		}

		public function getPrenom()
		{
			return $this->_prenom;
		}

		public function getDDN()
		{
			return $this->_ddn;
		}

		public function getAdresse()
		{
			return $this->_oadresse;
		}

		public function getNumtel()
		{
			return $this->_numtel;
		}

		public function getMail()
		{
			return $this->_mail;
		}

		public function getMDP()
		{
			return $this->_mdp;
		}

		public function getLogin()
		{
			return $this->_ologin;
		}

		public function verifCavalier($con)
		{
			$nom = $this->getNom();
			$prenom = $this->getPrenom();
			$ddn = $this->getDDN();
			$adresse = $this->getAdresse()->getIdentifiant();
			$numtel = $this->getNumtel();
			$mail = $this->getMail();
			$mdp = $this->getMDP();

			$sql = "SELECT `idca` FROM `v_cavaliers` WHERE `nomca`='$nom' AND `preca`='$prenom' AND `dnca`='$ddn' AND `adrca`='$adresse' AND `telca`='$numtel' AND `mailca`='$mail' AND `mdpca`='$mdp'";
			$selection = $con->query($sql);

			if ($nbl = $selection->fetch() ) {
				do {
					$identifiant = 'registre';
				} 
				while ($nbl = $selection->fetch() );

			} else {
				$sql = "SELECT `idca` FROM `v_cavaliers` WHERE `mailca`='$mail' AND `mdpca`='$mdp'";
				$selection = $con->query($sql);

				if ($nbl = $selection->fetch() ) {
					do {
						$identifiant = 'contact';
					}
					while ($nbl = $selection->fetch() );

				} else {
					$sql = "INSERT INTO `cavaliers`(`nomca`,`preca`,`dnca`,`adrca`,`telca`,`mailca`,`mdpca`,`loginca`) VALUES ('$nom','$prenom','$ddn','$adresse','$numtel','$mail','$mdp','1')";
					$insertion = $con->query($sql);
					$sql = 'SELECT MAX(`idca`) AS maxid FROM `v_cavaliers`';
					$selection = $con->query($sql);

					if ($nbl = $selection->fetch() ) {
						do {
							$identifiant = $nbl['maxid'];
						}
						while ($nbl = $selection->fetch() );
					}
					$sql = "UPDATE `cavaliers` SET `loginca`=(SELECT `id_login` FROM `login` WHERE `lib_login`='Utilisateur') WHERE `idca`='$identifiant' AND `mailca` NOT LIKE '%@clos-langlade.fr'";
					$modif = $con->query($sql);
					$sql = "SELECT `id_login`, `lib_login` FROM `v_login` WHERE `id_login`=(SELECT `loginca` FROM `v_cavaliers` WHERE `idca`='$identifiant')";
					$selection = $con->query($sql);

					if ($nbl = $selection->fetch() ) {
						do {
							$logid = $nbl['id_login'];
							$loglib = $nbl['lib_login'];
						}
						while ($nbl = $selection->fetch() );
						$this->getLogin()->setAll($logid,$loglib);
					}
				}
			}
			$this->_identifiant = $identifiant;
		}

		public function tableCavalier($con)
		{
			$sql = 'SELECT * FROM `v_cavaliers`, `v_adresses` WHERE `v_cavaliers`.`adrca`=`v_adresses`.`id_adr`';
			$selection = $con->query($sql);
		    foreach ($selection as $cavalier) {
		    	$this->setAll($cavalier['idca'],$cavalier['nomca'],$cavalier['preca'],$cavalier['dnca'],$cavalier['telca'],$cavalier['mailca'],$cavalier['mdpca']);
		    	$this->getAdresse()->setAll($cavalier['id_adr'],$cavalier['numero_adr'],$cavalier['lieu_adr'],$cavalier['cp_adr'],$cavalier['ville_adr']);
?>
                <tr>
                    <th><?php echo $this->getIdentifiant() ?></th>
                    <td><?php echo $this->getNom() ?></td>
                    <td><?php echo $this->getPrenom() ?></td>
                    <td><?php echo $this->getDDN() ?></td>
                    <td>
                    	<?php echo $this->getAdresse()->getNumero() ?>
                    	<br>
                    	<em>
                    		<?php echo $this->getAdresse()->getLieu() ?> 
                    	</em>
                    	<br>
                    	<?php echo $this->getAdresse()->getCP() ?>
                    	<br> 
                    	<?php echo $this->getAdresse()->getVille() ?></td>
                    <td><?php echo $this->getNumtel() ?></td>
                    <td><?php echo $this->getMail() ?></td>
                    <td><?php echo $this->getMDP() ?></td>
                </tr>
<?php
    		}
		}

		public function rechercheCavalier($con)
		{
			$mail = $this->getMail();
			$mdp = $this->getMDP();
			$sql = "SELECT `idca`, `nomca`, `preca`, `lib_login` FROM `v_cavaliers`, `v_login` WHERE `v_cavaliers`.`loginca`=`v_login`.`id_login` AND `mailca`='$mail' AND `mdpca`='$mdp'";
			$selection = $con->query($sql);
			
			if ($nbl = $selection->fetch() ) {
				do {
					$identifiant = $nbl['idca'];
					$nom = $nbl['nomca'];
					$prenom = $nbl['preca'];
					$login = $nbl['lib_login'];
				}
				while ($nbl = $selection->fetch() );

				$this->_identifiant = $identifiant;
				$this->_nom = $nom;
				$this->_prenom = $prenom;
				$this->getLogin()->setAll('NI', $login);
			} else {
				$this->_identifiant = 'introuvable';
			}
		}

		public function nouveauMDP($con)
		{
			$nom = $this->getNom();
			$prenom = $this->getPrenom();
			$mail = $this->getMail();
			$sql = "SELECT `idca` FROM `v_cavaliers` WHERE `nomca`='$nom' AND `preca`='$prenom' AND `mailca`='$mail'";
			$selection = $con->query($sql);

			if ($nbl = $selection->fetch() ) {
				do {
					$identifiant = $nbl['idca'];
				} 
				while ($nbl = $selection->fetch() );
				$mdp = $this->getMDP();
				$sql = "UPDATE `cavaliers` SET `mdpca`='$mdp' WHERE `idca`='$identifiant'";
				$modif = $con->query($sql);
				header("Location:../../connexion.php");
			} 
			else {
?>
<script type="text/javascript">
	alert('!!! Résultat introuvable !!!')
</script>
<?php
			}
		}

		public function modifCavalier($con)
		{
			$id = $this->getIdentifiant();
			$nom = $this->getNom();
			$prenom = $this->getPrenom();
			$numero = $this->getAdresse()->getNumero();
			$lieu = $this->getAdresse()->getLieu();
			$cp = $this->getAdresse()->getCP();
			$ville = $this->getAdresse()->getVille();
			$numtel = $this->getNumtel();
			$mail = $this->getMail();
			$mdp = $this->getMDP();
			$sql = "UPDATE `cavaliers`, `adresses` SET `nomca`='$nom', `preca`='$prenom', `numero_adr`='$numero', `lieu_adr`='$lieu', `cp_adr`='$cp', `ville_adr`='$ville', `telca`='$numtel', `mailca`='$mail', `mdpca`='$mdp' WHERE idca='$id' AND `cavaliers`.`adrca`=`adresses`.`id_adr`";
			$modif = $con->query($sql);
		}

		public function coordination($con)
		{
			$id_cavalier = $this->getIdentifiant();
			$sql = "SELECT `v_cavaliers`.`idca`, `nomca`, `preca`, `dnca`, `id_adr`, `numero_adr`, `lieu_adr`, `cp_adr`, `ville_adr`, `telca`, `mailca`, `mdpca` FROM `v_cavaliers`, `v_adresses` WHERE `v_cavaliers`.`adrca`=`v_adresses`.`id_adr` AND `v_cavaliers`.`idca`='$id_cavalier'";
			$selection = $con->query($sql);
			foreach ($selection as $cavalier) {
				$this->setAll($cavalier['idca'],$cavalier['nomca'],$cavalier['preca'],$cavalier['dnca'],$cavalier['telca'],$cavalier['mailca'],$cavalier['mdpca']);
				$this->getAdresse()->setAll($cavalier['id_adr'],$cavalier['numero_adr'],$cavalier['lieu_adr'],$cavalier['cp_adr'],$cavalier['ville_adr']);
			}
		}
	}
?>
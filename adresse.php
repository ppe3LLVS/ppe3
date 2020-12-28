<?php
	class Adresse
	{
		private $_identifiant;
		private $_numero;
		private $_lieu;
		private $_cp;
		private $_ville;
		
		function __construct($identifiant,$numero,$lieu,$cp,$ville)
		{
			$this->_identifiant = $identifiant;
			$this->_numero = $numero;
			$this->_lieu = $lieu;
			$this->_cp = $cp;
			$this->_ville = $ville;
		}

		public function setAll($identifiant,$numero,$lieu,$cp,$ville)
		{
			$this->_identifiant = $identifiant;
			$this->_numero = $numero;
			$this->_lieu = $lieu;
			$this->_cp = $cp;
			$this->_ville = $ville;
		}

		public function getIdentifiant()
		{
			return $this->_identifiant;
		}

		public function getNumero()
		{
			return $this->_numero;
		}

		public function getLieu()
		{
			return $this->_lieu;
		}

		public function getCP()
		{
			return $this->_cp;
		}

		public function getVille()
		{
			return $this->_ville;
		}

		public function verifAdresse($con)
		{
			$numero = $this->getNumero();
			$lieu = $this->getLieu();
			$cp = $this->getCP();
			$ville = $this->getVille();
			$sql = "SELECT `id_adr` FROM `v_adresses` WHERE `numero_adr`='$numero' AND `lieu_adr`='$lieu' AND `cp_adr`='$cp' AND `ville_adr`='$ville'";
			$selection = $con->query($sql);

			if ($nbl = $selection->fetch()) {
				do {
					$identifiant = $nbl['id_adr'];
				}
				while ($nbl = $selection->fetch() );
			} else {
				$sql = "INSERT INTO `adresses`(`numero_adr`,`lieu_adr`,`cp_adr`,`ville_adr`) VALUES ('$numero','$lieu','$cp','$ville')";
				$insertion = $con->query($sql);
				$sql = 'SELECT MAX(`id_adr`) AS maxid FROM `v_cavaliers`';
				$selection = $con->query($sql);

				if ($nbl = $selection->fetch()) {
					do {
						$identifiant = $nbl['maxid'];
					}
					while ($nbl = $selection->fetch());
				}
			}
			$this->_identifiant = $identifiant;
		}

	}
?>
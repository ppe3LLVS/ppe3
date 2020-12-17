<?php
	class Niveau
	{
		private $_identifiant;
		private $_libelle;

		function __construct($identifiant,$libelle)
		{
			$this->_identifiant = $identifiant;
			$this->_libelle = $libelle;
		}

		public function setAll($identifiant,$libelle)
		{
			$this->_identifiant = $identifiant;
			$this->_libelle = $libelle;
		}

		public function getIdentifiant()
		{
			return $this->_identifiant;
		}

		public function getLibelle()
		{
			return $this->_libelle;
		}

		public function setLibelle($libelle)
		{
			$this->_libelle = $libelle;
		}

		public function listeNiveaux($con)
		{
			$sql = 'SELECT * FROM `v_niveaux`';
			$selection = $con->query($sql);
		    foreach ($selection as $niveau) {
		        $this->setAll($niveau['idniv'],$niveau['libniv']);
?>
                <option value="<?php echo $this->getIdentifiant() ?>">
                    <?php echo $this->getLibelle() ?>                                      
                </option>
<?php
    		}  
		}
			
	}
?>
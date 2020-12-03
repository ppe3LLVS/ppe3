<?php
	class Niveau
	{
		private $_id;
		private $_libelle;

		function __construct($id,$libelle)
		{
			$this->_id = $id;
			$this->_libelle = $libelle;
		}

		public function get_id()
		{
			return $this->_id;
		}

		public function get_libelle()
		{
			return $this->_libelle;
		}

		public function liste_niveaux($con)
		{
			$selection = $con->query("SELECT * FROM niveaux");
		    foreach ($selection as $niveau) {
		        $oniveau = new Niveau($niveau['idniv'],$niveau['libniv']);
?>
                <option value="<?php echo $oniveau->get_id() ?>">
                    <?php echo $oniveau->get_libelle() ?>                                      
                </option>
<?php
    		}  
		}
	}
?>
<?php
	include 'niveau.php';
	
	class Necessite
	{
		private $_oactivite;
		private $_oniveau;

		function __construct(Activite $activite, Niveau $niveau)
		{
			$this->_oactivite = $activite;
			$this->_oniveau = $niveau;
		}

		public function getActivite()
		{
			return $this->_oniveau;
		}

		public function getNiveau()
		{
			return $this->_oniveau;
		}
	}
?>
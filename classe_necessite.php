<?php
	class Necessite
	{
		private $_oniveau;
		private $_oactivite;

		function __construct(Niveau $niveau, Activite $activite)
		{
			$this->_oniveau = $niveau;
			$this->_oactivite = $activite;
		}

		public function getNiveau()
		{
			$this->_oniveau;
		}

		public function getActivite()
		{
			$this->_oniveau;
		}
	}
?>
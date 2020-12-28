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
			return $this->_oniveau;
		}

		public function getActivite()
		{
			return $this->_oniveau;
		}
	}
?>
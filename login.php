<?php
	class Login
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
	}
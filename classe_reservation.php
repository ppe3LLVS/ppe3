<?php
	class Reservation
	{
		private $_ocavalier;
		private $_oactivite;
		private $_date;
		function __construct(Cavalier $cavalier, Activite $activite,$date)
		{
			$this->_ocavalier = $cavalier;
			$this->_oactivite = $activite;
			$this->_date = $date;
		}

		public function getCavalier()
		{
			$this->_ocavalier;
		}

		public function getActivite()
		{
			$this->_oactivite;
		}

		return $this->_date;
	}
?>
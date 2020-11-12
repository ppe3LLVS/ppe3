<?php
	class Reservation
	{
		private $_ocav;
		private $_oact;
		private $_datres;
		function __construct($cav,$act,$datres)
		{
			$this->_ocav = $cav->get_idcav();
			$this->_oact = $act->get_idact();
			$this->_datres = $datres;
		}
	}
?>
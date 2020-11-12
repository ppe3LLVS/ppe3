<?php
	class Necessite
	{
		private $_oniv;
		private $_oact;
		function __construct($niv,$act)
		{
			$this->_oniv = $niv->get_idniv();
			$this->_oact = $act->get_idact();
		}
	}
?>
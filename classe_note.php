<?php
	class Note
	{
		private $_cavalier;
		private $_cheval;
		private $_note;

		function __construct(Cavalier $cav,Cheval $che,$note)
		{
			$this->_cavalier = $cav;
			$this->_cheval = $che;
			$this->_note = $note;
		}
	}
?>
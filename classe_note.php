<?php
	class Note
	{
		private $_ocavalier;
		private $_ocheval;
		private $_note;

		function __construct(Cavalier $cavalier,Cheval $cheval,$note)
		{
			$this->_ocavalier = $cavalier;
			$this->_ocheval = $cheval;
			$this->_note = $note;
		}

		public function setNote($note)
		{
			$this->_note = $note;
		}

		public function getCavalier()
		{
			$this->_ocavalier;
		}

		public function getCheval()
		{
			$this->_ocheval;
		}

		public function getNote()
		{
			return $this->_note;
		}
	}
?>
<?php
	include ("race.php");
	include ("robe.php");
	class chevaux
	{
		private $idche;
		private $nomche;
		private $tailleche;
		private $dnche;
		private $orace;
		private $orobe;
		private $lescavaliers;

		public function __construct($idch,$nch,$tch,$dch,$ora,$oro)
		{
			$this->idche = $idch;
			$this->nomche = $nch;
			$this->tailleche = $tch;
			$this->dnche = $dch;
			$this->orace = $ora;
			$this->orobe = $oro;
		}

		public function get_idch()
		{
			return $this->idche;
		}
		public function get_nch()
		{
			return $this->nomche;
		}
		public function get_tch()
		{
			return $this->tailleche;
		}
		public function get_dch()
		{
			return $this->dnche;
		}
		public function get_ora()
		{
			return $this->orace;
		}
		public function get_oro()
		{
			return $this->orobe;
		}


		public function set_nch($nch)
		{
			return $this->nomche = $nch;
		}
		public function set_tch($tch)
		{
			return $this->tailleche = $tch;
		}
		public function set_dch($dch)
		{
			return $this->dnch = $dch;
		}
		Public function afficher($SQL, $connexion)
	{
		
		$Req = $connexion -> query($SQL);
		return ($Req);
	}
	}
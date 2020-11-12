<?php 
	class race 
	{
		private $idrace;
		private $librace;

		public function __construct($idra,$lra)
		{
			$this->idrace = $idra;
			$this->librace = $lra;
		}

		public function get_idra()
		{
			return $this->idrace;
		}
		public function get_lra()
		{
			return $this->librace;
		}


		public function set_lra($lra)
		{
			return $this->librace = $lra;
		}
		Public function afficher($SQL, $connexion)
	{
		
		$Req = $connexion -> query($SQL);
		return ($Req);
	}

	}
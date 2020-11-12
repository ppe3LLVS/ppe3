<?php 
	class robe
	{
		private $idrobe;
		private $librobe;

		public function __construct($idro,$lro)
		{
			$this->idrobe = $idro;
			$this->librobe = $lro;
		}

		public function get_idro()
		{
			return $this->idrobe;
		}
		public function get_lro()
		{
			return $this->librobe;
		}


		public function set_lro($lro)
		{
			return $this->librobe = $lro;
		}
		Public function afficher($SQL, $connexion)
	{
		
		$Req = $connexion -> query($SQL);
		return ($Req);
	}

	}

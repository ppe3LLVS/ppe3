<?php
	class Obtention
	{
		private $_cavalier;
		private $_niveau;
		private $_datotention;

		function __construct(Cavalier $cav,Niveau $niv,$date)
		{
			$this->_cavalier = $cav;
			$this->_niveau = $niv;
			$this->_datobtention = $date;
		}

		public function inscription_obtention($con,Cavalier $cav,Niveau $niv,$date)
		{
			$idcav = $cav->acces_id();
			$idniv = $niv->affichage_id();
			$sql = "INSERT INTO obtient VALUES ($idcav,$idniv,'$date')";
			//$req = $con->query($sql);
			echo $sql;
		}
	}
?>
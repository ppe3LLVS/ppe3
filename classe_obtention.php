<?php
	class Obtention
	{
		private $_cavalier;
		private $_niveau;
		private $_date;

		function __construct(Cavalier $cavalier,Niveau $niveau,$date)
		{
			$this->_cavalier = $cavalier;
			$this->_niveau = $niveau;
			$this->_date = $date;
		}

		public function get_cavalier()
		{
			return $this->_cavalier;
		}

		public function get_niveau()
		{
			return $this->_niveau;
		}

		public function get_date()
		{
			return $this->_date;
		}

		public function nouvelle_obtention($con)
		{
			$idc = $this->get_cavalier()->get_id();
			$idn = $this->get_niveau()->get_id();
			$date = $this->get_date();
			$sql = "INSERT INTO obtient VALUES ('$idc','$idn','$date')";
			$insertion = $con->query($sql);
		}

		public function table_cavin($con)
		{
			$selection = $con->query('SELECT cavaliers.idca, nomca, preca, niveaux.idniv, libniv, datobtention FROM cavaliers, obtient, niveaux WHERE obtient.idca=cavaliers.idca AND obtient.idniv=niveaux.idniv');
		    foreach ($selection as $ligne) {
		        $ocavalier = new Cavalier($ligne['idca'],$ligne['nomca'],$ligne['preca'],0,0,0,0,0,0,0,0,0);
		        $oniveau = new Niveau($ligne['idniv'],$ligne['libniv']);
		        $obtention = new Obtention($ocavalier,$oniveau,$ligne['datobtention']);
?>
                                <tr>  
                                    <td><?php echo $obtention->get_cavalier()->get_id() ?></td>
                                    <td><?php echo $obtention->get_cavalier()->get_nom() ?></td>
                                    <td><?php echo $obtention->get_cavalier()->get_prenom() ?></td>
                                    <td><?php echo $obtention->get_niveau()->get_id() ?></td>
                                    <td><?php echo $obtention->get_niveau()->get_libelle() ?></td>
                                    <td><?php echo $obtention->get_date() ?></td>
                                </tr>
<?php
    		}
		}
	}
?>
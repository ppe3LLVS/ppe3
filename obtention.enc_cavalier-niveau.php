<?php
	include 'cavalier.enc_adresse-login.php';
	include 'niveau.php';

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

		public function setDate($date)
		{
			$this->_date = $date;
		}

		public function getCavalier()
		{
			return $this->_cavalier;
		}

		public function getNiveau()
		{
			return $this->_niveau;
		}

		public function getDate()
		{
			return $this->_date;
		}

		public function nouvelleObtention($con)
		{
			$idc = $this->getCavalier()->getIdentifiant();
			$idn = $this->getNiveau()->getIdentifiant();
			$date = $this->getDate();
			$sql = "INSERT INTO `obtenir` VALUES ('$idc','$idn','$date')";
			$insertion = $con->query($sql);
		}

		public function tableObtention($con)
		{
			$sql = 'SELECT `v_cavaliers`.`idca`, `nomca`, `preca`, COUNT(`idniv`) AS `nbn` FROM `v_cavaliers` RIGHT JOIN `v_obtenir` ON `v_cavaliers`.`idca`=`v_obtenir`.`idca` GROUP BY `v_cavaliers`.`idca`';
			$selection = $con->query($sql);
		    foreach ($selection as $ligne) {
		    	$this->getCavalier()->setAll($ligne['idca'],$ligne['nomca'],$ligne['preca'],0,0,0,0);
?>
		    	<tr>
                    <td rowspan="<?php echo $ligne['nbn'] ?>"><?php echo $this->getCavalier()->getNom() ?> <?php echo $this->getCavalier()->getPrenom() ?></td>
<?php
				$identifiant = $ligne['idca'];
				$sql = "SELECT `v_niveaux`.`idniv`, `libniv`, `date_obtention` FROM `v_niveaux` RIGHT JOIN `v_obtenir` ON `v_niveaux`.`idniv`=`v_obtenir`.`idniv` WHERE `idca`='$identifiant'";
				$selectionint = $con->query($sql);
		    	foreach ($selectionint as $ligneint) {
		    		$this->getNiveau()->setAll($ligneint['idniv'],$ligneint['libniv']);
		        	$this->setDate($ligneint['date_obtention']);
?>
                    <td><?php echo $this->getNiveau()->getLibelle() ?></td>
                    <td><?php echo $this->getDate() ?></td>
                </tr>
<?php
		    	}
		    }
		}

		public function niveauxValides($con)
		{
			$id_cavalier = $this->getCavalier()->getIdentifiant();
			$sql = "SELECT `v_niveaux`.`idniv`, `libniv`, `date_obtention` FROM `v_niveaux`, `v_obtenir` RIGHT JOIN `v_cavaliers` ON `v_obtenir`.`idca`=`v_cavaliers`.`idca` WHERE `v_niveaux`.`idniv`=`v_obtenir`.`idniv` AND `v_cavaliers`.`idca`='$id_cavalier'";
	        $selection = $con->query($sql);
	        foreach ($selection as $niveau) {
	         	$this->getNiveau()->setAll($niveau['idniv'],$niveau['libniv']);
	         	$this->setDate($niveau['date_obtention']);

?>
				<li>
					<?php echo $this->getDate(),' : <b>', $this->getNiveau()->getLibelle(),'</b>' ?>
				</li>
<?php
	        } 
		}
	}
?>
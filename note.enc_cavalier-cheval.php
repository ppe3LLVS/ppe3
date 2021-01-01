<?php
	include 'cheval.enc_robe-race.php';

	class Note
	{
		private $_ocavalier;
		private $_ocheval;
		private $_note;
		private $_commentaire;

		function __construct(Cavalier $cavalier, Cheval $cheval, $note, $com)
		{
			$this->_ocavalier = $cavalier;
			$this->_ocheval = $cheval;
			$this->_note = $note;
			$this->_commentaire = $com;
		}

		public function setAll($note, $com)
		{
			$this->_note = $note;
			$this->_commentaire = $com;
		}

		public function getCavalier()
		{
			return $this->_ocavalier;
		}

		public function getCheval()
		{
			return $this->_ocheval;
		}

		public function getNote()
		{
			return $this->_note;
		}

		public function getCommentaire()
		{
			return $this->_commentaire;
		}

		public function tableNote($con)
		{
			$sql = 'SELECT `v_cavaliers`.`idca`, `nomca`, `preca`, COUNT(`idche`) AS `nbn` FROM `v_cavaliers` RIGHT JOIN `v_noter` ON `v_cavaliers`.`idca`=`v_noter`.`idca` GROUP BY `v_noter`.`idca`';
			$selection = $con->query($sql);
			foreach ($selection as $cavalier) {
				$this->getCavalier()->setAll($cavalier['idca'],$cavalier['nomca'],$cavalier['preca'],0,0,0,0);
?>
				<tr>
					<th rowspan="<?php echo $cavalier['nbn'] ?>"><?php echo $this->getCavalier()->getIdentifiant() ?></th>
					<td rowspan="<?php echo $cavalier['nbn'] ?>"><?php echo $this->getCavalier()->getNom(),' ', $this->getCavalier()->getPrenom() ?></td>
<?php
				$identifiant = $cavalier['idca'];
				$sql = "SELECT `v_chevaux`.`idche`, `nomche`, `note`, `commentaire` FROM `v_noter`, `v_chevaux` WHERE `v_noter`.`idche`=`v_chevaux`.`idche` AND `v_noter`.`idca`='$identifiant'";
				$selection2 = $con->query($sql);
				foreach ($selection2 as $note) {
					$this->getCheval()->setAll($note['idche'], $note['nomche'], 'NI', 'NI');
					$this->setAll($note['note'], $note['commentaire']);
?>
					<th><?php echo $this->getCheval()->getIdentifiant() ?></th>
					<td><?php echo $this->getCheval()->getNom() ?></td>
					<td><?php echo $this->getNote() ?></td>
					<td><?php echo $this->getCommentaire() ?></td>
				</tr>
<?php
				}
			}
		}

		public function reussiteCheval($con)
		{
			$sql = 'SELECT `v_chevaux`.`idche`, `nomche`, SUM(`note`) AS `ttn`, COUNT(`note`) AS `nbn` FROM `v_noter`, `v_chevaux` WHERE `v_noter`.`idche`=`v_chevaux`.`idche` GROUP BY `v_chevaux`.`idche`';
			$selection = $con->query($sql);
			foreach ($selection as $cheval) {
				$this->getCheval()->setAll($cheval['idche'], $cheval['nomche'], 'NI', 'NI');
?>
				<tr>
					<th><?php echo $this->getCheval()->getIdentifiant() ?></th>
					<td><?php echo $this->getCheval()->getNom() ?></td>
					<td> De 0 à 5 </td>
					<td><?php echo $ttn = $cheval['ttn'] ?></td>
					<td><?php echo $nbn = $cheval['nbn'] ?></td>
<?php
				$moy = $ttn/$nbn;
				$pm = $moy*20;
?>
					<td><?php echo number_format($moy, 3), ' (=', number_format($pm, 3), '%)'  ?></td>
					<td>
<?php
				if ($moy >= 4) {
					echo 'Très satisfaisant';
				} elseif ($moy >= 3) {
					echo 'Satisfaisant';
				} elseif ($moy >= 2) {
					echo 'Correct';
				} elseif ($moy >= 1) {
					echo 'Décevant';
				} else {
					echo 'À revoir';
				}
?>
					</td>
				</tr>
<?php
			}
		}
	}
?>
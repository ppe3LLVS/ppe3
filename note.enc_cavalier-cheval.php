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
			$sql = 'SELECT `v_chevaux`.`idche`, `nomche`, COUNT(`idca`) AS `nbc`, AVG(`note`) AS `moy` FROM `v_chevaux` RIGHT JOIN `v_noter` ON `v_chevaux`.`idche`=`v_noter`.`idche` GROUP BY `v_chevaux`.`idche`';
			$selection = $con->query($sql);
			foreach ($selection as $cheval) {
				$nbc = $cheval['nbc'];
				$this->getCheval()->setAll($cheval['idche'], $cheval['nomche'], 'NI', 'NI');
?>
				<tr>
					<th rowspan="<?php echo $nbc ?>"><?php echo $this->getCheval()->getIdentifiant() ?></th>
					<td rowspan="<?php echo $nbc ?>"><?php echo $this->getCheval()->getNom() ?></td>
					<td rowspan="<?php echo $nbc ?>"><?php echo $cheval['moy'] ?></td>
<?php
				$idche = $cheval['idche'];
				$sql2 = "SELECT `v_cavaliers`.`idca`, `nomca`, `preca`, `note`, `commentaire` FROM `v_noter` RIGHT JOIN `v_cavaliers` ON `v_noter`.`idca`=`v_cavaliers`.`idca` WHERE `idche`='$idche'";
				$selection2 = $con->query($sql2);
				foreach ($selection2 as $note) {
					$this->getCavalier()->setAll($note['idca'], $note['nomca'], $note['preca'], 'NI', 'NI', 'NI', 'NI');
					$this->setAll($note['note'], $note['commentaire']);
?>
					<th><?php echo $this->getCavalier()->getIdentifiant() ?></th>
					<td><?php echo $this->getCavalier()->getNom().' '.$this->getCavalier()->getPrenom() ?></td>
					<td><?php echo $this->getNote() ?></td>
					<td><?php echo $this->getCommentaire() ?></td>
				</tr>
<?php
				}
			}
		}
	}
?>
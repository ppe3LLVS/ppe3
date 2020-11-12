<!-- $this = objet courant -->

<?php
include 'bdd.php';
	class activite
	{
		private $idac;
		private $tarifac;
		private $place;
		private $dateac;
		private $heuredc;
		private $dureec;
		private $heuredp;
		private $dureep;
		private $lieuxp;
		private $datefins;
		private $nomac;
		private $omonture;

	

	   public function __construct($i,$t,$p,$date,$hdc,$dc,$hdp,$dp,$lp,$dfs,$n,$om)
	    {
	    $this->idac = $i;
		$this->tarifac = $t;
		$this->place = $p;
		$this->dateac = $date;
		$this->heuredc = $hdc;
		$this->dureec = $dc;
		$this->heuredp = $hdp;
		$this->dureep = $dp;
		$this->lieuxp= $lp;
		$this->datefins = $dfs;
		$this->nomac = $n;
		$this->omonture =$om;
	    }
	    //GETTER ou //ascenceur
	    public function get_id()
	    {
	    	return $this->idac;
	    }
	    public function get_tarif()
	    {
	    	return $this->tarifac;
	    }
	     public function get_place()
	    {
	    	return $this->place;
	    }
	     public function get_dateac()
	    {
	    	return $this->dateac;
	    }
	    public function get_heuredc()
	    {
	    	return $this->heuredc;
	    }
	    public function get_dureec()
	    {
	    	return $this->dureec;
	    }
	    public function get_heuredp()
	    {
	    	return $this->heuredp;
	    }
	    public function get_dureep()
	    {
	    	return $this->dureep;
	    }
	    public function get_lieuxp()
	    {
	    	return $this->lieuxp;
	    }
	    public function get_datefins()
	    {
	    	return $this->datefins;
	    }
	    public function get_nomac()
	    {
	    	return $this->nomac;
	    }
	    public function get_omonture()
	    {
	    	return $this->omonture;
	    }
	    //SETTER ou //mutateur
	     public function set_tarif($t)
	    {
	    	return $this->tarifac=$t;
	    }
	     public function set_place($p)
	    {
	    	return $this->place= $p;
	    }
	      public function set_dateac($date)
	    {
	    	return $this->dateac=  $date;
	    }
	    public function set_heuredc($hdc)
	    {
	    	return $this->heuredc = $hdc;
	    }
	    public function set_dureec($dc)
	    {
	    	return $this->dureec =$dc;
	    }
	    public function set_heuredp($hdp)
	    {
	    	return $this->heuredp= $hdp;
	    }
	    public function set_dureep($dp)
	    {
	    	return $this->dureep=$dp;
	    }
	    public function set_lieuxp($lp)
	    {
	    	return $this->lieuxp=$lp;
	    }
	    public function set_datefins($ds)
	    {
	    	return $this->datefins=$ds;
	    }
	    public function set_nomac($n)
	    {
	    	return $this->nomac=$n;
	    }
	    public function set_omonture($mo)
	    {
	    	return $this->omonture=$mo;
	    }
	  public function afficher($SQL,$con,$c)
{

	if($c !=''){

		$SQL = $SQL .' WHERE idac='.$c;
		
	}
	$requete = $con->query($SQL);
	return $requete;


}
public function afficherac($con)
{
			$SQL= "SELECT * FROM activite GROUP BY nomac";
            $requete = $con->query($SQL);
            return $requete;
           }
  Public function cours($con)
    {

        $SQL = "SELECT * FROM activite WHERE nomac LIKE '%ours'";
        $requete = $con->query($SQL);
        foreach ($requete as $afficher) 
        {
        	?>
        	<table border="1" style="text-align: center;"><tr><th>Tarif</th><th>Date activité</th><th>Nombre de places restantes</th><th>Heure de début du cours</th><th>Durée du cours</th><th>Type de l'activité</th></tr> 
        <?php
        	if($afficher['tarifac']!= null)
   			   {	?><tr><td><?php echo $afficher['tarifac']; ?></td><?php
   			   }
   			if($afficher['dateac']!= null)
               {
        			?><td><?php echo $afficher['dateac'];?></td><?php
        	   }
        	if($afficher['nbrplaceac']!= null)
               {
        			?><td><?php echo $afficher['nbrplaceac'];?></td><?php
        	   }
        	if($afficher['heuredc']!= null)
               {
        			?><td><?php echo $afficher['heuredc'];?></td><?php
        	   }
        	if($afficher['dureec']!= null)
               {
        			?><td><?php echo $afficher['dureec'];?></td><?php
        	   }
        	if($afficher['nomac']!= null)
               {
        			?><td><?php echo $afficher['nomac'];?></td></tr><?php
        	   }
       		?></table><br><?php
        }
    }
    Public function stage($con)
    {

        $SQL = "SELECT * FROM activite WHERE nomac LIKE '%tage'";
        $requete = $con->query($SQL);
        foreach ($requete as $afficher) 
        {
        	?>
        	<table border="1" style="text-align: center;"><tr><th>Tarif</th><th>Date activité</th><th>Nombre de places restantes</th><th>Date de fin du stage</th><th>Type de l'activité</th></tr> 
        
        	
   			   	<tr><td><?php echo $afficher['tarifac']; ?></td>
   			   
   			
        			<td><?php echo $afficher['dateac'];?></td>
        	   
        	
               
        			<td><?php echo $afficher['nbrplaceac'];?></td>
        	   
           
               
           	        <td><?php echo $afficher['datefins'];?></td>
               
        	
               
        			<td><?php echo $afficher['nomac'];?></td></tr>
        	   
       		?></table><br><?php
        }
    }
  Public function promenade($con)
    {

        $SQL = "SELECT * FROM activite WHERE nomac LIKE '%romenade'";
        $requete = $con->query($SQL);
        foreach ($requete as $afficher) 
        {
        	?>
        	<table border="1" style="text-align: center;"><tr><th>Tarif</th><th>Date activité</th><th>Nombre de places restantes</th><th>Heure de début de la promenade</th><th>Durée de la promenade</th><th>Lieu de la promenade</th><th>Type de l'activité</th></tr> 
        <?php
        	if($afficher['tarifac']!= null)
   			   {	?><tr><td><?php echo $afficher['tarifac']; ?></td><?php
   			   }
   			if($afficher['dateac']!= null)
               {
        			?><td><?php echo $afficher['dateac'];?></td><?php
        	   }
        	if($afficher['nbrplaceac']!= null)
               {
        			?><td><?php echo $afficher['nbrplaceac'];?></td><?php
        	   }
            if($afficher['heuredp']!= null)
               {
           	        ?><td><?php echo $afficher['heuredp'];?></td><?php
               }
            if($afficher['dureep']!= null)
               {
           	        ?><td><?php echo $afficher['dureep'];?></td><?php
               }  
            if($afficher['lieuxp']!= null)
               {
           	        ?><td><?php echo $afficher['lieuxp'];?></td><?php
               }             
        	if($afficher['nomac']!= null)
               {
        			?><td><?php echo $afficher['nomac'];?></td></tr><?php
        	   }
       		?></table><br><?php
        }
    }
}
 class cheval
{

private $idcheval;
private $nomcheval;
private $dnache;
private $tailleche;
private $idrace;
private $idrobe;

public function __construct($idc,$nc,$dnc,$t,$ira,$iro)
{
	$this->idcheval = $idc;
	$this->nomcheval= $nc;
	$this->dnache= $dnc;
	$this->tailleche= $t;
	$this->idrace= $ira;
	$this->idrobe= $iro;
}
public function get_idche()
{
	return $this->idcheval;

}
public function get_nomche()
{
	return $this->nomcheval;
	
}
public function get_dnache()
{
	return $this->dnache;
	
}
public function get_tc()
{
	return $this->tailleche;
	
}
public function get_ira()
{
	return $this->idrace;
	
}
public function get_iro()
{
	return $this->idrobe;
	
}
public function set_nomche($n)
{
	return $this->nomcheval=$n;
	
}
public function set_dnache($d)
{
	return $this->dnache = $d;
	
}
public function set_tc($tc)
{
	return $this->tailleche=$tc;
	
}
public function set_ira($ia)
{
	return $this->idrace = $ia;
	
}
public function set_iro($io)
{
	return $this->idrace= $io;
	
}
}







 

?>
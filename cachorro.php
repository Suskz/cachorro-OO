<?php
class cachorro{
    public $raca;
    public $porte;

    public function __construct($raca,$porte){
      $this->raca = $raca;
      $this->porte = $porte;
      echo("Cachorro ".$this->raca." nasceu \n");
      echo("Porte ".$this->porte);
    }

    public function __destruct() {
      echo("O " .$this->raca ." Morreu \n");
    }

    public function latir(){
      echo(" AUAU \n ");
    }
    
    public function comer(){
      echo(" comeu ração \n ");
    }
}
?>

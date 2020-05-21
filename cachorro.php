<?php
class cachorro{
    public $raca;

    public function __construct($raca){
      $this->raca = $raca;
      echo("Cachorro " .$this->raca. " nasceu \n ");
    }

    public function __destruct() {
      echo("O " .$this->raca ." Morreu \n");
    }

    public function latir(){
      echo(" AUAU \n ");
    }
}
$bob = new cachorro("puddle");
$bob ->latir();
?>
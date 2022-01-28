<?php 

require_once __DIR__ . '/MusicInstruments.php';

class Guitars extends MusicInstruments {
    public $strings = 6;
    public $kind;

    // voglio rendere obbligatorio come parametro anche il kind per questa classe.
    // sovrascriverò per questa classe la funzione construct aggiungendo il parametro kind

    public function __construct($_brand,$_type,$_price,$_kind){
        parent::__construct($_brand,$_type,$_price);
        $this->kind = $_kind;

    }
        
   
}

?>
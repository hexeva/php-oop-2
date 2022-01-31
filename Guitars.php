<?php 

require_once __DIR__ . '/Instrument.php';

class Guitars extends Instrument {
    public $strings = 6;
    public $kind;

    // voglio rendere obbligatorio come parametro anche il kind per questa classe.
    // sovrascriverò per questa classe la funzione construct aggiungendo il parametro kind

    public function __construct($_brand,$_type,$_price,$_kind){
        parent::__construct($_brand,$_type,$_price);
        $this->kind = $_kind;

        // voglio che il parametro prezzo sia effettivamente un numero

        if(is_int($_price)) {
            $this->price = $_price;
        } else {
            throw new exception('$_price must be a an integer');
   
        }

    }
        
   
}

?>
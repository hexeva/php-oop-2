<?php 
// MODELLO CLASSE BASE
class MusicInstruments {
    public $brand;

    public $type;

    public $price;

    public $material = 'wood';

    public function __construct($_brand,$_type,$_price){
        $this->brand = $_brand;
        $this->type = $_type;
        $this->price = $_price;
    }
}
?>
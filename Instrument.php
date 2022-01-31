<?php 
require_once __DIR__ . '/MusicInstruments.php';
require_once __DIR__ . '/AccountingProduct.php';

    class Instrument extends MusicInstruments {
    use AccountingProduct;


    }
?>
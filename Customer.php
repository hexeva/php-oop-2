<?php 
class Customer {
    public $name;

    public $lastname;

    public $email;

    public $phone;

    protected $shopping_cart = [];

    public function __construct($_name,$_lastname,$_email){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }
// setto l'array carrello dell'utente come protected così non può essere modificato da fuori.
// a questo punto per poter modificare questo array posso solo farlo attraverso la funzione che mi va ad aggiungere i prodotti
    public function addProduct($product){

        $this->shopping_cart[] = $product;

    }
}
?>
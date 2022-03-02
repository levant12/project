<?php

class Product extends Save{
    private $SKU;
    private $name;
    private $price;
    private $type;
    private $description;

    public function __construct($SKU,$name,$price,$type,$description) {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->description = $description;
    }

    public function saveProd(){
        if(!$this->emptyInput()){
            echo "Fill every field";
            header("location: ../add.php?emptyinput");
            exit();
        }
        if(!$this->invalidSKU()){
            echo "Invalid SKU";
            header("location: ../add.php?invalidSKU");
            exit();
        }
        $this->saveProduct($this->SKU,$this->name,$this->price,$this->type,$this->description);
    }

    private function emptyInput() {
        if(empty($this->SKU) || empty($this->name) ||empty($this->price)){
            return false;
        }else return true;
    }
    private function invalidSKU(){
        if(preg_match('~[^a-z\d]~i', $this->SKU)){
            return false;
        }else return true;
    }

}
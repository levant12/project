<?php

class Save extends dbh{

    protected function saveProduct($sku, $name, $price, $type, $description) {
        $stmt = $this->connect()->prepare('INSERT INTO products(sku, product_name, price, product_type, product_description) VALUES (?, ?, ?, ?, ?)');
        if(!$stmt->execute(array($sku, $name, $price, $type, $description))){
            $stmt = null;
            header("location: ../index.php?stmtfailed");
            exit();
        }
        $stmt = null;

    }
}
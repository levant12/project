<?php

include "../classes/dbh.php";
include "../classes/queryBuilder.php";

// get checkedboxes id-s from index.js
$checkedBoxes = $_POST;

// create new QueryBuilder
$query = new QueryBuilder();

// remove every checked product
foreach($checkedBoxes['checked'] as $checkedBox){
    $query->deleteProduct($checkedBox);
}


 header("location: ./index.php?error=none");
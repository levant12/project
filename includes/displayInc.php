<?php

include "C:\wamp64\www\classes\dbh.php";
include "C:\wamp64\www\classes\queryBuilder.php";

$query = new QueryBuilder();

$products = $query->getProducts();


<?php
$products = [
    [
        "name" => "X-Box One",
        "price" => 450000.00,
        "amount" => 15
    ],
    [
        "name" => "IPhone X",
        "price" => 560000.00,
        "amount" => 6
    ],


];

function my_function()
{
	global $products;
	
    foreach ($products as $key => $product) {
    	$products[$key]['shipping_cost'] = ($product['price'] * $product['amount']) * 0.02;
    }
}
my_function();

print_r($products);

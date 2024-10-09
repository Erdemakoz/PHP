<?php
// Define the Product class with a property
class Product {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

// Create four objects of the Product class with a name property
$product1 = new Product("Product 1");
$product2 = new Product("Product 2");
$product3 = new Product("Product 3");
$product4 = new Product("Product 4");

// Display the properties using echo
echo $product1->name . "<br>";
echo $product2->name . "<br>";
echo $product3->name . "<br>";
echo $product4->name . "<br>";

// Change one of the properties
$product1->name = "Updated Product 1";

// Display the updated property
echo $product1->name . "<br>";
?>

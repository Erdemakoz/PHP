<?php
// Define the Product class with name and price properties
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Method to format the price with two decimals
    public function formatPrice() {
        return number_format($this->price, 2);
    }
}

// Create four objects of the Product class with name and price properties
$product1 = new Product("Product 1", 19.99);
$product2 = new Product("Product 2", 5.49);
$product3 = new Product("Product 3", 14.99);
$product4 = new Product("Product 4", 25.00);

// Display the properties using echo
echo $product1->name . "<br>";
echo $product2->name . "<br>";
echo $product3->name . "<br>";
echo $product4->name . "<br>";

// Change one of the properties
$product1->name = "Updated Product 1";

// Display the updated property
echo $product1->name . "<br>";

// Display the formatted price of one of the products
echo $product1->formatPrice();
?>

<p align="center"><a target="_blank"></a> <b>Package Instruction</b>
<p align="center">

</p>



## Installation
```sh
# Inventory Library

A simple PHP library for managing an inventory of items.

## Installation

Install via Composer:

composer require abbassmortazavi/inventory-library
```

## Sample Code For Use it In Your Project
```sh
use InventoryLibrary\Inventory;

require 'vendor/autoload.php';
$inventory = new Inventory();
// Add items
$inventory->addItem('orange', 20);
$inventory->addItem('peach', 5);

// Remove items
$inventory->removeItem('orange', 5);

// Get stock
echo $inventory->getStock('orange'); // Output: 15
echo $inventory->getStock('peach'); // Output: 5
```

## Run Unit Tests
```sh
run this command in your command line :
vendor/bin/phpunit
```
<?php
/**
 * index.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from task1
 * @version 1.0.0
 * @date 2024/06/20 21:27
 */
use InventoryLibrary\Inventory;

require 'vendor/autoload.php';
$inventory = new Inventory();
// Add items
$inventory->addItem('apple', 10);
$inventory->addItem('banana', 5);

// Remove items
$inventory->removeItem('apple', 3);

// Get stock
echo $inventory->getStock('apple'); // Output: 7
echo $inventory->getStock('banana'); // Output: 5
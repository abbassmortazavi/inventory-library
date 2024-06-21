<?php

use InventoryLibrary\Inventory;
use PHPUnit\Framework\TestCase;

/**
 * InventoryTest.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from task1
 * @version 1.0.0
 * @date 2024/06/20 22:14
 */


class InventoryTest extends TestCase
{
    private Inventory $inventory;

    protected function setUp(): void {
        $this->inventory = new Inventory();
    }

    public function testAddItem() {
        $this->inventory->addItem('apple', 10);
        $this->assertEquals(10, $this->inventory->getStock('apple'));

        $this->inventory->addItem('apple', 5);
        $this->assertEquals(15, $this->inventory->getStock('apple'));
    }

    public function testRemoveItem() {
        $this->inventory->addItem('apple', 10);
        $this->inventory->removeItem('apple', 3);
        $this->assertEquals(7, $this->inventory->getStock('apple'));

        $this->inventory->removeItem('apple', 10);
        $this->assertEquals(0, $this->inventory->getStock('apple'));
    }

    public function testGetStock() {
        $this->inventory->addItem('apple', 10);
        $this->assertEquals(10, $this->inventory->getStock('apple'));
        $this->assertEquals(0, $this->inventory->getStock('banana'));
    }
}
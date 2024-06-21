<?php
/**
 * Inventory.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from task1
 * @version 1.0.0
 * @date 2024/06/20 21:24
 */
namespace InventoryLibrary;

class Inventory {
    private array $items = [];

    /**
     * Add item to inventory.
     *
     * @param string $itemType
     * @param int $count
     * @return void
     */
    public function addItem(string $itemType, int $count): void {
        if (!isset($this->items[$itemType])) {
            $this->items[$itemType] = 0;
        }
        $this->items[$itemType] += $count;
    }

    /**
     * Remove item from inventory.
     *
     * @param string $itemType
     * @param int $count
     * @return void
     */
    public function removeItem(string $itemType, int $count): void {
        if (isset($this->items[$itemType])) {
            $this->items[$itemType] -= $count;
            if ($this->items[$itemType] < 0) {
                $this->items[$itemType] = 0;
            }
        }
    }

    /**
     * Get current stock of an item type.
     *
     * @param string $itemType
     * @return int
     */
    public function getStock(string $itemType): int {
        return $this->items[$itemType] ?? 0;
    }
}
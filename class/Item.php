<?php
class Item
{
    public function __construct(array $item)
    {
        $this->quantity = $item['quantity'];
        $this->stock_status_id = $item['stock_status_id'];
        $this->price = $item['price'];
    }
}

?>
<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add($item,$idjela)
    {
        $storedItem = ['qty' => 0,'price' => $item->cijena,'item' => $item];
        if($this->items){
            if(array_key_exists($idjela,$this->items)){
                $storedItem = $this->items[$idjela];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->cijena * $storedItem['qty'];
        $this->items[$idjela] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->cijena;
    }

    public function reduceByOne($idjela)
    {
        $this->items[$idjela]['qty']--;
        $this->items[$idjela]['price'] -= $this->items[$idjela]['item']['cijena'];
        $this->totalQty--;
        $this->totalPrice = $this->totalPrice - $this->items[$idjela]['item']['cijena'];
    }
}

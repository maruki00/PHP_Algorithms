<?php


class Insertion{
    public function __construct(
        private array $items
    ){}

    public final function sort():array
    {
        for($i=1; $i<count($this->items); $i++){
            $j = $i;
            while($j>0 && $this->items[$j] < $this->items[$j-1]){
                $tmp = $this->items[$j];
                $this->items[$j] = $this->items[$j-1];
                $this->items[$j-1] = $tmp;
                $j--;
            }
        }
        return $this->items;
    }
}

$i = new Insertion([1,4,2,5,67,8,4,5678,44,45,6,2345,2456,3456]);
print_r($i->sort());
<?php



class Bubble{
    public function __construct(
        private array $items 
    ){}

    
    public final function sort(): array
    {
        print_r($this->items);
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

$b = new Bubble([1,5,3,7,4,7,8,3,5,67,7,4,5]);
print_r($b->sort());